<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ClientModel;

class MovementModel extends Model
{
    protected $table = 'movements';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function updateProfileData($id)
    {
        // Calcular depósitos, saques e saldo
        $deposits = $this->db->table('movements')->selectSum('value')->where('type', 'deposit')->get()->getRow()->value ?? 0;
        $exits = $this->db->table('movements')->selectSum('value')->where('type', 'exit')->get()->getRow()->value ?? 0;
        $balance = $deposits - $exits;

        echo 'deposits: ' . $deposits;
        echo 'exits: ' . $exits;
        echo 'balance: ' . $balance;

        // Atualizar os dados na tabela clients
        $clientModel = new ClientModel();
        $clientModel->updateClient(1, [
            'balance' => $balance
        ]);
    }

    public function registerMovement()
    {
        $description = $_POST['description'] ?? null;
        $type = $_POST['type'] ?? null;
        $value = $_POST['value'] ?? null;

        // Dados a serem inseridos
        $data = [
            'description' => $description,
            'type' => $type,
            'value' => $value
        ];

        // Inserindo dados na tabela 'movements'
        $this->db->transStart();
        $insert = $this->db->table('movements')->insert($data);
        $this->db->transComplete();

        if ($insert) {
            session()->setFlashdata('success', 'Movimento registrado com sucesso!');
        } else {
            session()->setFlashdata('error', 'Ocorreu um erro durante o processamento da transação.');
        }
        $this->updateProfileData($this->db->insertID());
    }

    public function updateMovement($id)
    {
        $description = $_POST['description'] ?? null;
        $type = $_POST['type'] ?? null;
        $value = $_POST['value'] ?? null;

        // Dados a serem inseridos
        $data = [
            'description' => $description,
            'type' => $type,
            'value' => $value
        ];

        // Inserindo dados na tabela 'movements'
        $this->db->transStart();
        $insert = $this->db->table('movements')->update($data, ['id_movement' => $id]);
        $this->db->transComplete();

        if ($insert) {
            session()->setFlashdata('success', 'Movimento atualizado com sucesso!');
        } else {
            session()->setFlashdata('error', 'Ocorreu um erro durante o processamento da transação.');
        }
        $this->updateProfileData($id);
    }

    public function deleteMovement($id)
    {
        $this->db->transStart();
        $insert =  $this->db->table('movements')->delete(['id_movement' => $id]);
        $this->db->transComplete();

        if ($insert) {
            session()->setFlashdata('success', 'Movimento excluido com sucesso!');
        } else {
            session()->setFlashdata('error', 'Ocorreu um erro durante o processamento da transação.');
        }
        $this->updateProfileData($id);
    }
}
