<div class="container mt-5">
    <div class="title">
        <h2><?php echo $pageData['title']?></h2>
    </div>
    <table class="table table-striped text-center table-bordered">
        <caption>Saraksts ar pēdējām piegādēm.</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">Klienta nosaukums</th>
                <th scope="col">Piegādes adrese</th>
                <th scope="col">Prece</th>
                <th scope="col">Preces summa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pageData['deliveries'] as $delivery) {
                echo '<tr>';
                echo '<td>' . $delivery['Name'] . '</td>'; 
                echo '<td>' . $delivery['Title'] . '</td>';
                echo '<td>' . $delivery['Item'] . '</td>';
                echo '<td>' . $delivery['Price'] . ' €</td>';
                echo '</tr>';
            } 
            ?>
        </tbody>
    </table>
</div>