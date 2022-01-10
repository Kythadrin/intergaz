<?php

namespace Intergaz\Controllers;

use Intergaz\Views\View;

abstract class Controller 
{
    protected $view;
    protected $pageData = array();
    
    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function loadPage();
}