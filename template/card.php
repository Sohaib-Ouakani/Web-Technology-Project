<div class="col-12 col-md-4 d-flex card-animate">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?php echo $element["title"]; ?></p>
    </header>

    <?php if(isset($element["isfoodoredercard"]) && $element["isfoodoredercard"] == true): ?>
    <p>Prenotato per: <?php echo $element["date"]; ?></p>
    <p>Stato: <?= $element["iscomplete"] == 0 ? "In elaborazione" : "Completato" ?></p>
    <p>
    <?php if($element["iscomplete"] == false): ?>
      Operazioni:
      <a class="text-dark" 
        href="manage-order.php?action=2&id=<?php echo $element["orderid"]; ?>" 
        aria-label="Modifica ordine per <?php echo htmlspecialchars($element["title"]);?>">Modifica</a>
      <a class="text-dark" 
        href="manage-order.php?action=3&id=<?php echo $element["orderid"]; ?>"  
        aria-label="Cancella ordine per <?php echo htmlspecialchars($element["title"]);?>">Cancella</a>
    <?php else: ?>
      Operazioni:  
    <?php endif; ?>  
    <?php endif; ?>
    </p>
    <p class="text-muted">
      <?php echo $element["description"]; ?>
    </p>

    <div class="mt-auto">
      <div class="ratio ratio-16x9">
        <img src="<?php echo UPLOAD_DIR.$element["image"]; ?>" 
          alt="<?php echo $element["title"]; ?>"
          class="object-fit-cover rounded mt-2">
      </div>
    </div>
  </article>
</div>