<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <?php
    if(isset($templateParams["js"])):
        foreach($templateParams["js"] as $script):
    ?>
    <script src="<?php echo $script; ?>"></script>
    <?php
        endforeach;
    endif;
    ?>
</head>
<body>
    <header class="text-center fornt-monosopace py-3 mb-4">
        <a class="navbar-brand" href="index.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSirk_N-1SIL8YTXlgN7bNXnzOa08I2ZRx68w&s" 
                alt="Volume Logo" height="50" class="me-2">
            <span class="fw-bold">VOLUME</span>
        </a>
    </header>

    <div class="row mb-4"> <!-- Ogni row ha 12 colonne -->
        <div class="col-1"></div> <!-- 1 Colonna -->
        <nav class="col-10"> <!-- 10 Colonna -->
            <ul class="row nav nav-pills text-center">
                <li class="col-6 col-md-3 nav-item p-2"><a href="#" class="nav-link bg-primary text-black">Home</a></li>
                <li class="col-6 col-md-3 nav-item p-2"><a href="#" class="nav-link bg-primary text-black">Archivio</a></li>
                <li class="col-6 col-md-3 nav-item p-2"><a href="#" class="nav-link bg-primary text-black">Contatti</a></li>
                <li class="col-6 col-md-3 nav-item p-2"><a href="#" class="nav-link bg-primary text-black">Login</a></li>
            </ul>
        </nav>
        <div class="col-1"></div> <!-- 1 Colonna -->
    </div>

    <main>
      <?php
        if(isset($templateParams["nome"])){
          require($templateParams["nome"]);
        }
      ?>
    </main>

    <footer class="bg-light mt-5 pt-5 pb-4 border-top">
        <div class="container">
            <div class="row justify-content-between align-items-start">
                <!-- Brand -->
                <header class="col-md-4 mb-4">
                    <h2 class="fw-bold">VOLUME</h2>
                    <p class="text-muted mb-0">
                        La caffetteria universitaria all'interno del campus UNIBO di Cesena
                    </p>
                </header>

                <!-- Right-aligned links -->
                <section class="col-md-7">
                    <div class="row text-md-end">
                        <!-- Features -->
                        <section class="col-6 col-md-4 mb-4">
                            <h2 class="fw-semibold mb-3">Features</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Ordini online</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Menu del giorno</a></li>
                            </ul>
                        </section>

                        <!-- Learn More -->
                        <section class="col-6 col-md-4 mb-4">
                            <h2 class="fw-semibold mb-3">Learn more</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Chi siamo</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Dove siamo</a></li>
                            </ul>
                        </section>

                        <!-- Support -->
                        <section class="col-6 col-md-4 mb-4">
                            <h2 class="fw-semibold mb-3">Support</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Contattaci</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Repo</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Legal</a></li>
                            </ul>
                        </section>
                    </div>
                </section>
            </div>

            </hr>

            <footer class="text-center text-muted small">
                © 2025 Volume — Tutti i diritti riservati
            </footer>
        </div>
    </footer>
</body>
</html>