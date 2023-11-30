<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ClientModel;

class MovementModel extends Model
{
    protected $table = 'movements';
    protected $client_m;
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
        $this->client_m = new ClientModel();
    }


    public function registerMovement()
    {
        $description = $this->getInput('description');
        $type = $this->getInput('type');
        $value = $this->getInput('value');

        // Dados a serem inseridos
        $data = [
            'description' => $description,
            'type' => $type,
            'value' => $value,
            'id_client' => $this->client_m->getID()
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
        $this->client_m->updateProfileData($this->db->insertID());
    }

    public function updateMovement($id)
    {
        $description = $this->getInput('description');
        $type = $this->getInput('type');
        $value = $this->getInput('value');

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
        $this->client_m->updateProfileData($id);
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
        $this->client_m->updateProfileData($id);
    }

    private static function getInput($fieldName)
    {
        return isset($_POST[$fieldName]) ? $_POST[$fieldName] : null;
    }
}
