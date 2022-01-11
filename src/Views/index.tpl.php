<div class="container-fluid">
    <div class="row">
        <ul class="col-xl-3 col-lg-4 col-md-5 col-sm-4 col-6 list-group clients-list overflow-auto">
            <?php 
                $controller->displayDataAsList($pageData['clients']);
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

<script src="public/js/index.js"></script>