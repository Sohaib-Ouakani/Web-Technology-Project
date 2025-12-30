<div class="col-12 col-md-4 d-flex">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?= $element["dishname"]; ?></p>
    </header>

    <p>Id: <?= $element["orderid"] ?></p>

    <p>Stato: <?= $element["iscomplete"] ? "Completo" : "Ancora da fare" ?></p>

    <p>Da preparare per: <?= $element["orderdate"] ?></p>

    <p>Per il cliente: <?= $element["clientname"] . " " . $element["clientsurname"] ?></p>

    <p>Operazioni:
      <a class="text-dark" 
        href="admin-process-dish.php?action=2&id=<?php echo $element["orderid"]; ?>" 
        aria-label="Modifica ordine <?php echo htmlspecialchars($element["orderid"]);?>">Modifica</a>
      <a class="text-dark" 
        href="admin-process-dish.php?action=3&id=<?php echo $element["orderid"]; ?>"  
        aria-label="Cancella ordine <?php echo htmlspecialchars($element["orderid"]);?>">Cancella</a> 
    </p>

    <div class="mt-auto">
      <div class="ratio ratio-16x9">
        <img src="<?php echo UPLOAD_DIR.$element["dishimagepath"]; ?>" 
          alt="<?php echo $element["dishname"]; ?>"
          class="object-fit-cover rounded mt-2">
      </div>
    </div>
  </article>
</div>