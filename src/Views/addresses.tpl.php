<div class="title">
    <h2><?php echo $pageData['client-name']?> adreses :</h2>
</div>
<ol id="addresses" class="list-group list-group-numbered">
<?php
    if (!empty($pageData['addresses'])) {
        foreach ($pageData['addresses'] as $address) {
            echo '<li class="list-group-item">' . $address['Title'];
        }
    }
?>
</ol>