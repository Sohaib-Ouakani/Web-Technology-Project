<?php
renderHero(
    "Prenota il tuo pranzo in un click",
    "Benvenuto da Volume - la caffetteria
    dell'Università di Cesena",
    "Da Volume puoi gustare piatti freschi e preparati al momento, perfetti per una pausa tra le lezioni o un pranzo con i colleghi.
      Prenota online, ritira senza attese e goditi il tuo momento di relax.
      Caffè, panini, primi piatti e dolci artigianali: tutto fatto con ingredienti locali e passione universitaria."
);
?>
<section class="py-4">
    <div class="row g-4">
      <?php
        foreach($templateParams['cards'] as $element):
          require("card.php");
        endforeach;
      ?>
    </div>
</section>