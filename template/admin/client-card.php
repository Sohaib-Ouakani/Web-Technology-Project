<?php 
$completeName = $element["Name"] . " " . $element["Surname"];
?>
<div class="col-12 col-md-4 d-flex card-animate">
  <article class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
    <header>
      <p class="fw-bold fs-5 mb-2"><?= $completeName ?></p>
    </header>

    <p>Id: <?= $element["ID"] ?></p>

    <p>Password: <?= $element["Password"] ?></p>

    <p>Diritti: <?= $element["IsAdmin"] == false ? "Utente" : "Admin"; ?></p>

    <p>Operazioni:
      <a class="text-dark" 
        href="admin-client-manage.php?action=2&id=<?php echo $element["ID"]; ?>" 
        aria-label="Modifica cliente <?php echo htmlspecialchars($completeName);?>">Modifica</a>
      <a class="text-dark" 
        href="admin-client-manage.php?action=3&id=<?php echo $element["ID"]; ?>"  
        aria-label="Cancella cliente <?php echo htmlspecialchars($completeName);?>">Cancella</a> 
    </p>
  </article>
</div>