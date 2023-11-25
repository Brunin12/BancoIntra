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

    public function getClientById($id)
    {
        return $this->db->table($this->table)->where($this->primaryKey, $id)->get()->getRow();
    }


    public function updateClient($id, $data)
    {
        $this->db->table($this->table)->where($this->primaryKey, $id)->update($data);
    }
}
