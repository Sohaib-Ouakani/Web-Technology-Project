<section class="py-4">
    <h2>Ciao, <?php echo $_SESSION["name"]; echo " "; echo $_SESSION["surname"];  ?> (Admin)</h2>

    <div class="row g-4">
      <?php $items = [
          [
            "title" => "Guarda gli ordnini",
            "description" => "gardo gay",
            "image" => "./upload/IMG_4558.jpg",
          ],
          [
            "title" => "Un’esperienza più ROSSI",
            "description" => "cloe è molto bella",
            "image" => "./upload/IMG_4558.jpg",
          ],
          [
            "title" => "Ancora un motivo per venire",
            "description" => "Non c'è",
            "image" => "./upload/IMG_4558.jpg",
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