<div class="col-12 col-md-4 d-flex">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?php echo $element["title"]; ?></p>
    </header>

    <?php if(isset($element["date"])): ?>
    <p><?php echo $element["date"]; ?></p>
    <?php endif; ?>

    <?php if(isset($element["iscomplete"])): ?>
    <p><?= $element["iscomplete"] == 0 ? "In processo" : "Completato" ?></p>
    <?php endif; ?>

    <p class="text-muted">
      <?php echo $element["description"]; ?>
    </p>

    <div class="mt-auto">
      <img src="<?php echo $element["image"]; ?>" class="img-fluid rounded mt-2">
    </div>
  </article>
</div>