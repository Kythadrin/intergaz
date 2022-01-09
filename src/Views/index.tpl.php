<div class="container-fluid">
    <div class="row">
        <ul class="col-3 list-group clients-list overflow-auto">
            <?php 
            foreach ($pageData['clients'] as $client) {
                echo '<li class="list-group-item">
                    <div name="client" class="row">
                        <div class="col client-name">'
                            . $client['Name'] .
                        '</div>
                        <div class="col">
                            <button id="address" onclick="showAddresses(this.value)" id="address" class="btn btn-info" value="' . $client['ID'] . '">Parādīt adreses</button>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="delivery?client=' . $client['ID'] . '">Atvērt piegādes</a>
                        </div>
                    </div>
                </li>';
            }
            ?>
        </ul>
        <div class="col" id="clientAddress">
            <div class="title">
                <h2>Client Addresses:</h2>
            </div>
        </div>
    </div>
</div>