<?php

namespace Intergaz\Controllers;

use Intergaz\Views\View;

class ErrorpageController extends Controller
{
    private $pageTpl = '/src/Views/404page.tpl.php';

    public function __construct()
    {
        $this->view = new View();
    }

    public function loadPage()
    {
        $this->pageData['title'] = "404 error";

        $this->view->renderWithoutNav($this->pageTpl, $this->pageData);
    }
}