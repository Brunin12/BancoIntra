<?php

namespace App\Controllers;
use App\Models\ClientModel;

class Account extends BaseController
{
    private $page = array();
    private $data = array();
    protected $client_m;

    public function __construct()
    {
        $this->client_m = new ClientModel();
    }

    public function index(): string
    {
        $this->data['title'] = "Entrar";
        $this->data['active_menu'] = "Conta";
        $this->data['active_page'] = "entrar";

        $this->page['js'] = view('account/js', $this->data);
        $this->page['css'] = view('account/css', $this->data);
        $this->page['content'] = view('account/index', $this->data);
        return view('default/index', $this->page);
    }

    public function register(): string
    {
        $this->data['title'] = "Cadastrar";
        $this->data['active_menu'] = "Conta";
        $this->data['active_page'] = "cadastrar";

        $this->page['js'] = view('account/js', $this->data);
        $this->page['css'] = view('account/css', $this->data);
        $this->page['content'] = view('account/index', $this->data);
        return view('default/index', $this->page);
    }

    public function login() {
        return $this->client_m->login();
    }

    public function storeRegister() {
        return $this->client_m->register();
    }
    public function exit() {
        return $this->client_m->exit();
    }
    
}
