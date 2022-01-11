<div class="title">
    <h2><?php echo $pageData['client-name']?> adreses :</h2>
</div>
<ol id="addresses" class="list-group list-group-numbered">
<?php
    $controller->displayDataAsList($pageData['addresses']);
?>
</ol>