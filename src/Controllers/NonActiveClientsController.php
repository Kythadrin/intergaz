<?php

namespace Intergaz\Controllers;

use Intergaz\Models\NonActiveClientsModel;
use Intergaz\Views\View;

class NonActiveClientsController extends Controller
{
    private $pageTpl = '/src/Views/non-active-clients.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new NonActiveClientsModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "Neaktīvie klienti";
        $this->pageData['clients'] = $this->model->getNonActiveClients();
       
        $this->view->render($this->pageTpl, $this->pageData, $this);
    }
}