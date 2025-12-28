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
      <?php $items = [
          [
            "title" => "Questo piatto speciale",
            "description" => "Scopri il nostro menù del giorno, con proposte sane e gustose create dal nostro chef.
              Prenota in anticipo e assicurati il tuo pranzo preferito.",
            "image" => "https://www.getserveware.com/wp-content/uploads/2022/09/cosmo-green-melamine-plate-pasta.jpg",
          ],
          [
            "title" => "Un’esperienza più smart",
            "description" => "Accedi con il tuo account direttamente dal sito.
              Semplice, veloce e sostenibile — senza sprechi.",
            "image" => "https://images.pexels.com/photos/3182773/pexels-photo-3182773.jpeg",
          ],
          [
            "title" => "Ancora un motivo per venire",
            "description" => "Ogni caffè servito sostiene progetti universitari e iniziative studentesche.
              Da Volume, ogni pausa fa bene anche alla comunità.",
            "image" => "https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg",
          ]
        ]; 
      ?>

      <!-- CARDS -->
      <?php 
        foreach($items as $element):
          require 'template/card.php';
        endforeach;
      ?>
    </div>
</section>