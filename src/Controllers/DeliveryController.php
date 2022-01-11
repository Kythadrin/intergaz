<?php

namespace Intergaz\Controllers;

use Intergaz\Models\DeliveryModel;
use Intergaz\Views\View;

class DeliveryController extends Controller
{
    private $pageTpl = '/src/Views/delivery.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new DeliveryModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        if (isset($_GET['client'])) {
            $this->pageData['title'] = "Klientu piegādes";
            $this->pageData['clientInfo'] = $this->model->getClientInfo($_GET['client']);
            $this->pageData['deliveries'] = $this->model->getDeliveries($_GET['client']);

            $this->view->render($this->pageTpl, $this->pageData, $this);
        } else {
            $this->pageData['title'] = "404 error";
            $this->pageTpl = '/src/Views/404page.tpl.php';
            
            $this->view->renderWithoutNav($this->pageTpl, $this->pageData);
        }
    }
}