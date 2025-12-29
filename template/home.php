<!-- ============================ HERO SECTION ============================ -->
<section class="py-5">
    <p class="text-muted mb-1">Prenota il tuo pranzo in un click</p>

    <h2 class="display-5 fw-bold mb-3">
      Benvenuto da Volume – la caffetteria<br>
      dell’Università di Cesena
    </h2>

    <p class="lead text-muted mb-4" style="max-width: 750px;">
      Da Volume puoi gustare piatti freschi e preparati al momento, perfetti per una pausa tra le lezioni o un pranzo con i colleghi.
      Prenota online, ritira senza attese e goditi il tuo momento di relax.
      Caffè, panini, primi piatti e dolci artigianali: tutto fatto con ingredienti locali e passione universitaria.
    </p>

    <hr>
</section>



<!-- ============================ FEATURE CARDS ============================ -->
<section class="py-4">
    <div class="row g-4">
      <?php
        foreach($templateParams['cards'] as $element):
          require 'template/card.php';
        endforeach;
      ?>
    </div>
</section>