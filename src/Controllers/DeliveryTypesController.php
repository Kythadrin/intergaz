<?php

namespace Intergaz\Controllers;

use Intergaz\Models\DeliveryTypesModel;
use Intergaz\Views\View;

class DeliveryTypesController extends Controller
{
    private $pageTpl = '/src/Views/delivery-types.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new DeliveryTypesModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "Pasūtījumu tipi";
        $this->pageData['clients'] = $this->model->getClientsWith2Types();
       
        $this->view->render($this->pageTpl, $this->pageData, $this);
    }
}