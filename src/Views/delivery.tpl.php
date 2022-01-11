<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['clientInfo']['Name'];?></h2>
        <div class="row">
            <div class="col-3">
                <p>Numurs: &nbsp;<?php echo $pageData['clientInfo']['Phone'];?></p>
            </div>
            <div class="col-3">
                <p>E-mail: &nbsp;<?php echo $pageData['clientInfo']['Email']?></p>
            </div>
        </div>
    </div>
    <?php
        $caption = 'Klientu piegādes';
        $controller->displayDataAsTable($pageData['deliveries'], $caption);
    ?>
</div>