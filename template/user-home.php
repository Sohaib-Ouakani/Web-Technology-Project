<section class="py-4">
    <h2 class="fw-bold">Ciao, <?php echo $_SESSION["name"]; echo " "; echo $_SESSION["surname"];  ?></h2>

    <?php if(isset($templateParams["formmsg"])):?>
        <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>

    <a href="manage-order.php?action=1" class="btn btn-secondary w-40">Aggiungi Ordine</a>
    
    <section>
        <h3>Queste sono le tue prenotazioni:</h3>

        <div class="row g-4">
            <?php
            foreach($templateParams["orders"] as $element):
                $element["isfoodoredercard"] = true;
                require 'template/card.php';
            endforeach;
            ?>  
        </div>    
    </section>
</section>