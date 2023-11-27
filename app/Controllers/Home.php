<?php

namespace App\Controllers;

use App\Models\ClientModel;

class Home extends BaseController
{
    private $page = array();
    private $data = array();
    private $db = array();
    protected $client_m;

    public function __construct()
    {
        $this->client_m = new ClientModel();
        $this->client_m->checkLoggedIn();
        $this->db = db_connect();
    }

    public function index()
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve entrar em uma conta para acessar esta página.');
            return redirect()->to(base_url('account/login'));
        }
        $this->data['title'] = "Início";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "inicio";
        $this->data['user'] = $this->db->table('clients')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getRow();


        $exits = $this->db->table('movements')
            ->where('type', 'exit')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getResult();

        // Buscando movimentações do tipo "deposit"
        $deposits = $this->db->table('movements')
            ->where('type', 'deposit')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getResult();

        $this->data['deposits'] = $deposits;
        $this->data['exits'] = $exits;

        $this->page['js'] = view('home/js', $this->data);
        $this->page['css'] = view('home/css', $this->data);
        $this->page['content'] = view('home/index', $this->data);
        return view('default/index', $this->page);
    }

    public function profile()
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        $this->data['title'] = "Perfil";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "perfil";
        $this->data['user'] = $this->db->table('clients')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getRow();

        $this->data['exits'] = $this->db->table('movements')
            ->where('type', 'exit')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getResult();

        // Buscando movimentações do tipo "deposit"
        $this->data['deposits'] = $this->db->table('movements')
            ->where('type', 'deposit')
            ->where('active', '1')
            ->where('id_client', session('user')->id_client)
            ->get()
            ->getResult();

        $this->page['js'] = view('profile/js', $this->data);
        $this->page['css'] = view('profile/css', $this->data);
        $this->page['content'] = view('profile/index', $this->data);
        return view('default/index', $this->page);
    }
}
