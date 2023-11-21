<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $page = array();
    private $data = array();
    public function index(): string
    {
        $this->data['title'] = "Início";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "inicio";
        $this->page['js'] = view('home/js', $this->data);
        $this->page['css'] = view('home/css', $this->data);
        $this->page['content'] = view('home/index', $this->data);
        return view('default/index', $this->page);
    }

    public function starter(): string
    {
        $this->data['title'] = "Starter";
        $this->data['active_menu'] = "Páginas";
        $this->data['active_page'] = "starter";
        $this->page['js'] = view('starter/js', $this->data);
        $this->page['css'] = view('starter/css', $this->data);
        $this->page['content'] = view('starter/index', $this->data);
        return view('default/index', $this->page);
    }
}
