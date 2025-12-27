<div class="col-md-4 d-flex">
  <div class="p-4 rounded h-100 w-100 d-flex flex-column" style="background:#dff0e8;">
    <div class="flex-grow-1">
      <p class="fw-bold fs-5 mb-2"><?php echo $element["title"]; ?></p>
      <p class="text-muted">
        <?php echo $element["description"]; ?>
      </p>
    </div>
    <div class="mb-3 text-center">
      <?php if ($hasButton): ?>
      <button type="button" class="btn btn-danger btn-sm px-5">
        <?php echo $element["buttonText"]; ?>
      </button>
      <?php endif; ?>
    </div>
    <div class="mt-auto">
      <img src="<?php echo $element["image"]; ?>" class="img-fluid rounded mt-2">
    </div>
  </div>
</div>