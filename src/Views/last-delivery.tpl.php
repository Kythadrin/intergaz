<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['title']?></h2>
    </div>
    <?php
        $caption = 'Saraksts ar pēdējām piegādēm.';
        $controller->displayDataAsTable($pageData['deliveries'], $caption);
    ?>
</div>