<?php

namespace App\Controllers;

use App\Models\MovementModel;

class Movement extends BaseController
{
    protected $page = array();
    protected $data = array();
    protected $db;
    protected $request;
    protected $movement_m;

    public function __construct()
    {
        $this->db = db_connect();
        $this->movement_m = new MovementModel();
    }

    public function register(): string
    {
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
        $this->movement_m->registerMovement();
        
        return redirect()->to(base_url('register/movement'));
    }

    public function edit($id)
    {
        // Recupera os dados do movimento pelo ID para preencher o formulário de edição
        $movement = $this->db->table('movements')->where('id_movement', $id)->get()->getRow();

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
        $this->movement_m->updateMovement($id);
        return redirect()->to(base_url());
    }

    

    public function delete($id)
    {
        $this->movement_m->deleteMovement($id);
        return redirect()->to(base_url());
    }
    
    
}
