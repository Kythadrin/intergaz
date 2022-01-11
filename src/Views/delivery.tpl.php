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
    <table class="table table-striped text-center table-bordered">
        <caption>Klientu piegādes</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Piegādes adrese</th>
                <th scope="col">Piegādes datums</th>
                <th scope="col">Preču summa</th>
                <th scope="col">Piegādes status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $controller->displayDataAsTable($pageData['deliveries']);
            ?>
        </tbody>
    </table>
</div>