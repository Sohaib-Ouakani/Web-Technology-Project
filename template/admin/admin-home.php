<?php
renderHero(
    "Centro di controllo",
    "Ciao, " . $_SESSION["name"] . " " . $_SESSION["surname"] . "!",
    "Da qui puoi gestire menu, ordini, utenti e tutti i dati della caffetteria. Seleziona una delle opzioni qui sotto per accedere alla sezione dedicata."
);
?>
<section class="py-4">
  <div class="row pt-4 g-4">
    <div class="col-12 col-md-4 d-flex">
      <a href="admin-orders-home.php" 
         class="p-4 rounded h-100 w-100 d-flex flex-column justify-content-center align-items-center bg-secondary text-dark text-decoration-none">
        <p class="fw-bold fs-5 mb-0 text-center">Gestisci Prenotazioni</p>
      </a>
    </div>
    <div class="col-12 col-md-4 d-flex">
      <a href="admin-clients-home.php" 
         class="p-4 rounded h-100 w-100 d-flex flex-column justify-content-center align-items-center bg-secondary text-dark text-decoration-none">
        <p class="fw-bold fs-5 mb-0 text-center">Gestisci Clienti</p>
      </a>
    </div>
    <div class="col-12 col-md-4 d-flex">
      <a href="admin-dishs-home.php" 
         class="p-4 rounded h-100 w-100 d-flex flex-column justify-content-center align-items-center bg-secondary text-dark text-decoration-none">
        <p class="fw-bold fs-5 mb-0 text-center">Gestisci Piatti</p>
      </a>
    </div>
  </div>
</section>