<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $page = array();
    private $data = array();
    private $db = array();

    public function __construct()
    {
        $this->db =  db_connect();
    }

    public function index(): string
    {
        $this->data['title'] = "Início";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "inicio";
        $this->data['user'] = $this->db->table('clients')
            ->where('id_client', '1')
            ->get()
            ->getRow();


        $exits = $this->db->table('movements')
            ->where('type', 'exit')
            ->get()
            ->getResult();

        // Buscando movimentações do tipo "deposit"
        $deposits = $this->db->table('movements')
            ->where('type', 'deposit')
            ->get()
            ->getResult();

        $this->data['deposits'] = $deposits;
        $this->data['exits'] = $exits;

        $this->page['js'] = view('home/js', $this->data);
        $this->page['css'] = view('home/css', $this->data);
        $this->page['content'] = view('home/index', $this->data);
        return view('default/index', $this->page);
    }

    public function profile(): string
    {
        $this->data['title'] = "Perfil";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "perfil";
        $this->data['user'] = $this->db->table('clients')
            ->where('id_client', '1')
            ->get()
            ->getRow();

        $this->data['exits'] = $this->db->table('movements')
            ->where('type', 'exit')
            ->get()
            ->getResult();

        // Buscando movimentações do tipo "deposit"
        $this->data['deposits'] = $this->db->table('movements')
            ->where('type', 'deposit')
            ->get()
            ->getResult();

        $this->page['js'] = view('profile/js', $this->data);
        $this->page['css'] = view('profile/css', $this->data);
        $this->page['content'] = view('profile/index', $this->data);
        return view('default/index', $this->page);
    }
}
