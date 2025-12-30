<?php
renderLittleHero(
    "Ciao, " . $_SESSION["name"] . " " . $_SESSION["surname"] . "!",
    "Da questa pagina puoi gestire tutte le prenotazioni."
);
?>
<section class="py-4">
    <?php if(isset($templateParams["formmsg"])): ?>
        <div class="alert alert-info mb-4" role="alert">
            <?= htmlspecialchars($templateParams["formmsg"]) ?>
        </div>
    <?php endif; ?>
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Le prenotazioni</h3>
        <a href="admin-process-dish.php?action=1" class="btn btn-primary">
            Aggiungi prenotazione
        </a>
    </div>
    
    <div class="row g-4">
        <?php
        foreach($templateParams["orders"] as $element):
            require("order-card.php");
        endforeach;
        ?>  
    </div>
</section>