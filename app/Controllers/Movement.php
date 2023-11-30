<?php

namespace App\Controllers;

use App\Models\MovementModel;
use App\Models\ClientModel;

class Movement extends BaseController
{
    protected $page = array();
    protected $data = array();
    protected $db;
    protected $request;
    protected $movement_m;
    protected $client_m;

    public function __construct()
    {
        $this->db = db_connect();
        $this->client_m = new ClientModel();
        $this->movement_m = new MovementModel();
        $this->client_m->checkLoggedIn();
    }

    public function register()
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        $this->data['title'] = "Registrar";
        $this->data['active_menu'] = "Movimentação";
        $this->data['active_page'] = "registrar";
        $this->page['js'] = view('movement/js', $this->data);
        $this->page['css'] = view('movement/css', $this->data);
        $this->page['content'] = view('movement/index', $this->data);
        return view('default/index', $this->page);
    }

    public function store()
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        $this->movement_m->registerMovement();

        return redirect()->to(base_url('register/movement'));
    }

    public function edit($id)
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        if ($this->client_m->verifyAccess($id)) {
            return redirect()->to(base_url());
        }
        // Recupera os dados do movimento pelo ID para preencher o formulário de edição
        $movement = $this->db->table('movements')
            ->where('id_movement', $id)
            ->where('active', '1')
            ->get()->getRow();

        // Verifica se o movimento existe
        if ($movement) {
            // Se existir, retorna a view com os dados do movimento para a edição
            $this->data['title'] = "Editar Movimento";
            $this->data['active_menu'] = "Movimentação";
            $this->data['active_page'] = "editar";
            $this->data['movement'] = $movement;

            $this->page['js'] = view('movement/js', $this->data);
            $this->page['css'] = view('movement/css', $this->data);
            $this->page['content'] = view('movement/index', $this->data);

            return view('default/index', $this->page);
        } else {
            session()->setFlashdata('error', 'Movimentação não encontrada.');
            return redirect()->to(base_url('register/movement'));
        }
    }

    public function update($id)
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        if ($this->client_m->verifyAccess($id)) {
            return redirect()->to(base_url());
        }
        $this->movement_m->updateMovement($id);
        return redirect()->to(base_url());
    }



    public function delete($id)
    {
        if (!$this->client_m->checkLoggedIn()) {
            session()->setFlashdata('error', 'Você deve fazer login para acessar esta página');
            return redirect()->to(base_url('account/login'));
        }
        if ($this->client_m->verifyAccess($id)) {
            return redirect()->to(base_url());
        }
        $this->movement_m->deleteMovement($id);
        return redirect()->to(base_url());
    }
}
