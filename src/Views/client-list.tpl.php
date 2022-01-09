<ul class="col list-group clients-list overflow-auto">
    <?php 
    foreach ($pageData['clients'] as $client) {
        echo '<li class="list-group-item">
            <form name="client" action="/" method="POST" class="row">
                <div class="col client-name">'
                    . $client['Name'] .
                '</div>
                <div class="col">
                    <button name="address" id="address" id="address" type="submit" class="btn btn-info" value="' . $client['ID'] . '">Parādīt adreses</button>
                </div>
                <div class="col">
                    <a id="delivery" class="btn btn-primary" href="delivery?client=' . $client['ID'] . '">Atvērt piegādes</a>
                </div>
            </form>
        </li>';
    }
    ?>
</ul>