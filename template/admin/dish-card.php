<div class="col-12 col-md-4 d-flex">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?= $element["Name"]; ?></p>
    </header>

    <p>Id: <?= $element["ID"] ?></p>

    <p>Description: <?= $element["Description"] ?></p>

    <p>ImagePath: <?= $element["ImagePath"] ?></p>

    <p>Piatto del giorno: <?= $element["Special"] == true ? "SI" : "No"; ?></p>

    <p>Operazioni:
      <a class="text-dark" 
        href="admin-dish-manage.php?action=2&id=<?php echo $element["ID"]; ?>" 
        aria-label="Modifica piatto <?php echo htmlspecialchars($element["Name"]);?>">Modifica</a>
      <a class="text-dark" 
        href="admin-dish-manage.php?action=3&id=<?php echo $element["ID"]; ?>"  
        aria-label="Cancella piatto <?php echo htmlspecialchars($element["Name"]);?>">Cancella</a> 
    </p>

    <div class="mt-auto">
      <div class="ratio ratio-16x9">
        <img src="<?php echo UPLOAD_DIR.$element["ImagePath"]; ?>" 
          alt="<?php echo $element["Name"]; ?>"
          class="object-fit-cover rounded mt-2">
      </div>
    </div>
  </article>
</div>