<?php

namespace Intergaz\Controllers;

use Intergaz\Models\IndexModel;
use Intergaz\Views\View;

class IndexController extends Controller
{
    private $pageTpl = '/src/Views/index.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "Klientu saraksts";
        $this->pageData['clients'] = $this->model->getClients();
       
        $this->view->render($this->pageTpl, $this->pageData);
    }
}