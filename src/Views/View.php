<?php

namespace Intergaz\Views;

class View 
{
    public function render($tpl, $pageData)
    {
        include ROOT . '/src/Views/components/header.tpl.php';
        include ROOT . '/src/Views/components/nav.tpl.php';
        include ROOT . $tpl;
        include ROOT . '/src/Views/components/footer.tpl.php';
    }

    public function renderWithoutNav($tpl, $pageData)
    {
        include ROOT . '/src/Views/components/header.tpl.php';
        include ROOT . $tpl;
        include ROOT . '/src/Views/components/footer.tpl.php';
    }
}