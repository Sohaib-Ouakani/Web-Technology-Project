<section class="py-4">
    <h2 class="fw-bold">Ciao, <?php echo $_SESSION["name"]; echo " "; echo $_SESSION["surname"];  ?></h2>

    <section>
        <h3>Queste sono le tue prenotazioni:</h3>

        <div class="row g-4">
            <!-- ORDERS -->
            <?php
            $query_return = $dbh->getFoodOrderByClientId($_SESSION["id"]);
            $items = array_map(function($row) {
                return [
                    'title' => $row['name'],
                    'description' => $row['description'],
                    'image' => $row['imagepath'],
                    'date' => $row['orderdate'],
                    'iscomplete' => $row['iscomplete']
                ];
            }, $query_return);

            foreach($items as $element):
                require 'template/card.php';
            endforeach;
            ?>  
        </div>    
    </section>
</section>