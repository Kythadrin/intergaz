<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['title']?></h2>
    </div>
    <table class="table table-striped text-center table-bordered">
        <caption>Klienti, kuriem nekad netika piegādāta šķidrā prece.</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Klienta nosaukums</th>
                <th scope="col">Piegādes adrese</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $controller->displayDataAsTable($pageData['clients']);
            ?>
        </tbody>
    </table>
</div>