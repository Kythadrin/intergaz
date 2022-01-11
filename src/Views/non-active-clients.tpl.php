<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['title']?></h2>
    </div>
    <?php
        $caption = 'Klienti, kuriem nekad netika piegādāta šķidrā prece.';
        $controller->displayDataAsTable($pageData['clients'], $caption);
    ?>
</div>