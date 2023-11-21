<?php

namespace App\Controllers;

class Components extends BaseController
{
    private $page = array();
    private $data = array();
    public function card(): string
    {
        $this->data['title'] = "Card";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "card";
        $this->page['js'] = view('card/js', $this->data);
        $this->page['css'] = view('card/css', $this->data);
        $this->page['content'] = view('card/index', $this->data);
        return view('default/index', $this->page);
    }

    public function cardbox(): string
    {
        $this->data['title'] = "Card Box";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "cardbox";
        $this->page['js'] = view('cardbox/js', $this->data);
        $this->page['css'] = view('cardbox/css', $this->data);
        $this->page['content'] = view('cardbox/index', $this->data);
        return view('default/index', $this->page);
    }

    public function alert(): string
    {
        $this->data['title'] = "Alert Box";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "alert";
        $this->page['js'] = view('alert/js', $this->data);
        $this->page['css'] = view('alert/css', $this->data);
        $this->page['content'] = view('alert/index', $this->data);
        return view('default/index', $this->page);
    }
    public function carousel(): string
    {
        $this->data['title'] = "Carousel";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "carousel";
        $this->page['js'] = view('carousel/js', $this->data);
        $this->page['css'] = view('carousel/css', $this->data);
        $this->page['content'] = view('carousel/index', $this->data);
        return view('default/index', $this->page);
    }
    public function social(): string
    {
        $this->data['title'] = "Social Card";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "social";
        $this->page['js'] = view('social/js', $this->data);
        $this->page['css'] = view('social/css', $this->data);
        $this->page['content'] = view('social/index', $this->data);
        return view('default/index', $this->page);
    }
    public function table(): string
    {
        $this->data['title'] = "Table";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "table";
        $this->page['js'] = view('table/js', $this->data);
        $this->page['css'] = view('table/css', $this->data);
        $this->page['content'] = view('table/index', $this->data);
        return view('default/index', $this->page);
    }
}
