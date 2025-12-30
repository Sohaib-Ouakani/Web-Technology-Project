<?php
renderHero(
    "Ammira la nostra offerta di piatti",
    "Goditi il nostro Menu",
    "Scopri i piatti freschi preparati ogni giorno dalla nostra cucina. Prelibatezze locali e ricette tradizionali per una pausa pranzo indimenticabile."
);
?>
<section class="py-4">
    <div class="row g-4">

      <!-- CARDS -->
      <?php 
        foreach($templateParams["menuItems"] as $item):
            $element["title"] = $item["Name"]; 
            $element["description"] = $item["Description"]; 
            $element["image"] = $item["ImagePath"]; 
            require 'template/card.php';
        endforeach;
      ?>
    </div>
</section>