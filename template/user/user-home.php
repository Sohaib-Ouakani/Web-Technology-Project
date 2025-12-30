<?php
renderHero(
    "Forse erano due click per fare una prenotazione",
    "Ciao, " . $_SESSION["name"] . " " . $_SESSION["surname"] . "!",
    "Da questa pagina puoi prenotare un nuovo piatto oppure visionare, modificare o cancellare le tue prenotazioni."
);
?>
<section class="py-4">
    <?php if(isset($templateParams["formmsg"])): ?>
        <div class="alert alert-info mb-4" role="alert">
            <?= htmlspecialchars($templateParams["formmsg"]) ?>
        </div>
    <?php endif; ?>
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Le tue prenotazioni</h3>
        <a href="manage-order.php?action=1" class="btn btn-primary">
            Aggiungi ordine
        </a>
    </div>
    
    <div class="row g-4">
        <?php foreach($templateParams["orders"] as $element): ?>
            <?php 
                $element["isfoodoredercard"] = true;
                require 'template/card.php';
            ?>
        <?php endforeach; ?>  
    </div>
</section>