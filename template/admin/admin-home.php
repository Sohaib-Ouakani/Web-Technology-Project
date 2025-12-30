<section class="py-4">
  <h2>Ciao, <?php echo $_SESSION["name"]; echo " "; echo $_SESSION["surname"];  ?> (Admin)</h2>

  <div class="row pt-4">
    <div class="col-12 col-md-4 d-flex mb-4">
      <a href="admin-manage-orders.php" class="p-4 rounded h-100 w-100 d-flex flex-column bg-secondary text-dark">
        <header>
          <p class="fw-bold fs-5 mb-2">Gestisci Prenotazioni</p>
        </header>

        <div class="mt-auto">
          <div class="ratio ratio-16x9">
            <img src="./upload/IMG_4558.jpg" 
              alt=""
              class="object-fit-cover rounded mt-2">
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex mb-4">
      <a href="admin-manage-clients.php" class="text-dark p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
        <header>
          <p class="fw-bold fs-5 mb-2m">Gestisci Clienti</p>
        </header>

        <div class="mt-auto">
          <div class="ratio ratio-16x9">
            <img src="./upload/IMG_4558.jpg" 
              alt=""
              class="object-fit-cover rounded mt-2">
          </div>
        </div>
      </a>
    </div>

    <div class="col-12 col-md-4 d-flex mb-4">
      <a href="admin-manage-dishs.php" class="text-dark p-4 rounded h-100 w-100 d-flex flex-column bg-secondary">
        <header>
          <p class="fw-bold fs-5 mb-2">Gestisci Piatti</p>
        </header>

        <div class="mt-auto">
          <div class="ratio ratio-16x9">
            <img src="./upload/IMG_4558.jpg" 
              alt=""
              class="object-fit-cover rounded mt-2">
          </div>
        </div>
      </a>
    </div>
  </div>
</section>