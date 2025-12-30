<section class="py-4">
    <h2 class="fw-bold"><?php echo $_SESSION["name"]; echo " "; echo $_SESSION["surname"]; ?></h2>

    <?php if(isset($templateParams["formmsg"])):?>
        <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>

    <a href="admin-process-dish.php?action=1" class="btn btn-secondary w-40">Aggiungi Piatto</a>
    
    <section>
        <h3>Questi sono i piatti:</h3>

        <div class="row g-4">
            <?php
            foreach($templateParams["dishs"] as $element):
                require("dish-card.php");
            endforeach;
            ?>  
        </div>    
    </section>
</section>