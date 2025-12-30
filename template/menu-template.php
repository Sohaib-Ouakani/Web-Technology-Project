<!-- ============================ HERO SECTION ============================ -->
<section class="pt-5">
    <p class="text-muted mb-1">Ammira la nostra offerta di piatti</p>

    <h1 class="display-5 fw-bold mb-3">
      Goditi il nostro Menu
    </h1>

    <hr>
</section>



<!-- ============================ FEATURE CARDS ============================ -->
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