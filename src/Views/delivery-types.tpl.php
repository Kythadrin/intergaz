<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['title']?></h2>
    </div>  
    <?php
        $caption = 'Klientus, kuriem bija dažādi piegādes tipi uz vienu adresi, gan šķidrās preces, gan cietās.';
        $controller->displayDataAsTable($pageData['clients'], $caption);
    ?>
</div>