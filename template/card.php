<div class="col-12 col-md-4 d-flex">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?php echo $element["title"]; ?></p>
    </header>

    <?php if(isset($element["date"])): ?>
    <p>Prenotato per: <?php echo $element["date"]; ?></p>
    <?php endif; ?>

    <?php if(isset($element["iscomplete"])): ?>
    <p>Stato: <?= $element["iscomplete"] == 0 ? "In processo" : "Completato" ?></p>
    <?php endif; ?>

    <p class="text-muted">
      <?php echo $element["description"]; ?>
    </p>

    <div class="mt-auto">
      <div class="ratio ratio-16x9">
        <img src="<?php echo UPLOAD_DIR.$element["image"]; ?>" class="object-fit-cover rounded mt-2">
      </div>
    </div>
  </article>
</div>