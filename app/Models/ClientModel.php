<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'id_client';
    protected $allowedFields = ['balance'];
    protected $useTimestamps = true;
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function updateProfileData()
    {
        // Calcular depósitos, saques e saldo
        $deposits = $this->db->table('movements')->selectSum('value')->where('type', 'deposit')
        ->where('active', '1')
        ->where('id_client', session('user')->id_client)
        ->get()->getRow()->value ?? 0;
        $exits = $this->db->table('movements')->selectSum('value')
        ->where('type', 'exit')
        ->where('active', '1')
        ->where('id_client', session('user')->id_client)
        ->get()->getRow()->value ?? 0;
        $balance = $deposits - $exits;

        $this->updateClient(session('user')->id_client, [
            'balance' => $balance
        ]);
    }

    public function getClient($data)
    {
        return $this->db->table($this->table)->where($data)
        ->where('active', '1')
        ->get()->getRow();
    }

    public function getID()
    {
        return session('user')->id_client;
    }

    public function verifyAccess($id) {
        if ($id !== $this->getID()) {
            session()->setFlashdata('error', 'Você não tem permição para acessar este conteúdo.');
            return true;
        }
        return false;
    }

    public function updateClient($id, $data)
    {
        $this->verifyAccess($id);
        $this->db->table($this->table)->where($this->primaryKey, $id)
        ->where('active', '1')
        ->update($data);
    }

    public function login()
    {

        $email = sha1($this->getInput('email'));
        $password = sha1($this->getInput('password'));

        $user = $this->getClient(['email' => $email, 'password' => $password]);

        if ($user) {
            session()->set('login', true);
            session()->set('user', $user);
            session()->setFlashdata('success', 'Bem-Vindo novamente ' . $user->name . '!');
            return redirect()->to(base_url());
        } else {
            session()->setFlashdata('error', 'Usuário não encontrado.');
            return redirect()->to(base_url('/account/login'));
        }
    }

    public function register()
    {
        $name = $this->getInput('name');
        $profession = $this->getInput('profession');
        $email = sha1($this->getInput('email'));
        $password = sha1($this->getInput('password'));

        $data = [
            'name' => $name,
            'profession' => $profession,
            'email' => $email,
            'password' => $password,
        ];

        $existingUser = $this->getClient(['email' => $email]);

        if (!$existingUser) {
            $this->db->transStart();
            $this->db->table('clients')->insert($data);

            $id_client = $this->db->insertID();

            $user = $this->db->table('clients')->where('id_client', $id_client)
            ->where('active', '1')
            ->get()->getRow();
            
            $this->db->transComplete();

            session()->set('login', true);
            session()->set('user', $user);
            session()->setFlashdata('success', 'Bem-Vindo ' . $user->name . '!');
            return redirect()->to(base_url());
        } else {
            session()->setFlashdata('error', 'O usuário já existe');
            return redirect()->to(base_url('account/register'));
        }
    }

    public function checkLoggedIn()
    {
        return (session('login'));
    }


    public function exit()
    {
        session()->remove(['login', 'user']);
        unset($_SESSION['login']);
        unset($_SESSION['user']);
        session_unset();
        session()->destroy();
        return redirect()->to(base_url('account/login'));
    }

    private static function getInput($fieldName)
    {
        return isset($_POST[$fieldName]) ? $_POST[$fieldName] : null;
    }
}
