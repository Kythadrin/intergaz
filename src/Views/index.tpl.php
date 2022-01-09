<div class="container-fluid">
    <div class="row">
        <ul class="col-xl-3 col-lg-4 col-md-5 col-sm-4 col-6 list-group clients-list overflow-auto">
            <?php 
            foreach ($pageData['clients'] as $client) {
                echo '<li class="list-group-item">
                    <div name="client" class="row">
                        <div class="col-xl-2 col-lg-4 col-md-3 w-75 mb-2">'
                            . $client['Name'] .
                        '</div>
                        <div class="col-xl-5 col-lg-6 col-md-5 mb-2">
                            <button id="address" onclick="showAddresses(this.value)" id="address" class="btn btn-info" value="' . $client['ID'] . '">Parādīt adreses</button>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-5 mb-2">
                            <a class="btn btn-primary" href="delivery?client=' . $client['ID'] . '">Atvērt piegādes</a>
                        </div>
                    </div>
                </li>';
            }
            ?>
        </ul>
        <div class="col" id="clientAddress">
            <div class="title">
                <h2>Klientu adreses:</h2>
            </div>
            <p>Lai skatītu, noklikšķiniet uz pogas "Parādīt adreses" blakus klienta vārdam.</p>
        </div>
    </div>
</div>