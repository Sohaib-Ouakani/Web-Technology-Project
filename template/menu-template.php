<?php
renderHero(
    $heroPreamble,
    $heroMain,
    $heroDesc
);
?>
<section class="py-4">
    <div class="row g-4">
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