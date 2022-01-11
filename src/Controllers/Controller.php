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

    public function displayDataAsTable($data, $caption = '')
    {
        echo '<table class="table table-striped text-center table-bordered">
                <caption>' . $caption . '</caption>
                <thead class="table-dark">
                    <tr>';

        foreach ($data[0] as $key=>$value) {
            echo '<th scope="col">'. $key . '</th>';
        }

        echo '
                </tr>
            </thead>
            <tbody>';

        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $item=>$value) {
                echo '<td>' . $value;
                if ($item == 'Preces summa' || $item == 'Preču summa') {
                    echo ' €</td>';
                } 
            }
            echo '</tr>';
        } 

        echo '</tbody>
            </table>';
    }

    public function displayDataAsList($data)
    {
        if (!empty($data)) {
            echo '<ol id="addresses" class="list-group list-group-numbered">';
            foreach ($data as $row) {
                foreach ($row as $item)
                {
                    echo '<li class="list-group-item">' . $item;
                }
            }
            echo '</ol>';
        }
    }

    abstract public function loadPage();
}