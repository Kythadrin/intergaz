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

    public function displayDataAsTable($data)
    {
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $item) {
                echo '<td>' . $item . '</td>'; 
            }
            echo '</tr>';
        } 
    }

    public function displayDataAsList($data)
    {
        if (!empty($data)) {
            foreach ($data as $row) {
                foreach ($row as $item)
                {
                    echo '<li class="list-group-item">' . $item;
                }
            }
        }
    }

    abstract public function loadPage();
}