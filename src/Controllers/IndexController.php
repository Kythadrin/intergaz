<?php

namespace Intergaz\Controllers;

use Intergaz\Models\IndexModel;
use Intergaz\Views\View;

class IndexController extends Controller
{
    private $pageTpl = '/src/Views/index.tpl.php';
    private $model;
    private $data;

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "Klientu saraksts";
       
        $this->view->render($this->pageTpl, $this->pageData, $this);
    }

    public function displayClients()
    {
        $clients = $this->model->getClients();
        foreach ($clients as $client) {
            echo '<li class="list-group-item">
                <div name="client" class="row">
                    <div class="col-xl-2 col-lg-4 col-md-3 w-75 mb-2">'
                        . $client['Name'] .
                    '</div>
                    <div class="col-xl-5 col-lg-6 col-md-5 mb-2">
                        <button id="address" onclick="showAddresses(this.value)" id="address" class="btn btn-info" value="' . $client['ID'] . '">Parādīt adreses</button>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-5 mb-2">
                        <a class="btn btn-primary" href="delivery?client=' . $client['ID'] . '">Atvērt piegādes</a>
                    </div>
                </div>
            </li>';
        }
    }
}