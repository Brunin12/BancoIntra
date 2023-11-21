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
        $this->page['js'] = view('components/card/js', $this->data);
        $this->page['css'] = view('components/card/css', $this->data);
        $this->page['content'] = view('components/card/index', $this->data);
        return view('default/index', $this->page);
    }

    public function cardbox(): string
    {
        $this->data['title'] = "Card Box";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "cardbox";
        $this->page['js'] = view('components/cardbox/js', $this->data);
        $this->page['css'] = view('components/cardbox/css', $this->data);
        $this->page['content'] = view('components/cardbox/index', $this->data);
        return view('default/index', $this->page);
    }

    public function alert(): string
    {
        $this->data['title'] = "Alert Box";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "alert";
        $this->page['js'] = view('components/alert/js', $this->data);
        $this->page['css'] = view('components/alert/css', $this->data);
        $this->page['content'] = view('components/alert/index', $this->data);
        return view('default/index', $this->page);
    }
    public function carousel(): string
    {
        $this->data['title'] = "Carousel";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "carousel";
        $this->page['js'] = view('components/carousel/js', $this->data);
        $this->page['css'] = view('components/carousel/css', $this->data);
        $this->page['content'] = view('components/carousel/index', $this->data);
        return view('default/index', $this->page);
    }
    public function social(): string
    {
        $this->data['title'] = "Social Card";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "social";
        $this->page['js'] = view('components/social/js', $this->data);
        $this->page['css'] = view('components/social/css', $this->data);
        $this->page['content'] = view('components/social/index', $this->data);
        return view('default/index', $this->page);
    }
    public function table(): string
    {
        $this->data['title'] = "Table";
        $this->data['active_menu'] = "Componentes";
        $this->data['active_page'] = "table";
        $this->page['js'] = view('components/table/js', $this->data);
        $this->page['css'] = view('components/table/css', $this->data);
        $this->page['content'] = view('components/table/index', $this->data);
        return view('default/index', $this->page);
    }
}
