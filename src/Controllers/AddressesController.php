<?php

namespace Intergaz\Controllers;

use Intergaz\Models\AddressesModel;
use Intergaz\Views\View;

class AddressesController extends Controller
{
    private $pageTpl = '/src/Views/addresses.tpl.php';
    private $model;

    public function __construct()
    {
        $this->model = new AddressesModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        if (isset($_GET['client'])) {
            $this->pageData['title'] = "Klientu saraksts";
            $this->pageData['client-name'] = $this->model->getClientName($_GET['client']);
            $this->pageData['addresses'] = $this->model->getAddresses($_GET['client']);
        } else {
            $this->pageData['title'] = "404 error";
            $this->pageTpl = '/src/Views/404page.tpl.php';
        }

        $this->view->renderWithoutNav($this->pageTpl, $this->pageData);
    }
}