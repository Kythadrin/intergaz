<?php

namespace Intergaz\Controllers;

use Intergaz\Models\LastDeliveryModel;
use Intergaz\Views\View;

class LastDeliveryController extends Controller
{
    private $pageTpl = '/src/Views/last-delivery.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new LastDeliveryModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "Pēdējā piegāde";
        $this->pageData['deliveries'] = $this->model->getLast10Deliveries();
       
        $this->view->render($this->pageTpl, $this->pageData, $this);
    }

}