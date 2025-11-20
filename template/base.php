<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["titolo"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <header class="border-bottom py-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSirk_N-1SIL8YTXlgN7bNXnzOa08I2ZRx68w&s" 
                        alt="Volume Logo" height="32" class="me-2">
                    <span class="fw-bold">VOLUME</span>
                </a>

                <!-- MOBILE TOGGLE -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- NAVIGATION LINKS -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Oggi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Chi Siamo</a>
                        </li>

                        <!-- LOGIN BUTTON -->
                        <li class="nav-item">
                            <a class="btn btn-outline-primary rounded-pill px-4" href="#">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                <div class="col-md-4 mb-4">
                    <h4 class="fw-bold">VOLUME</h4>
                    <p class="text-muted mb-0">
                        La caffetteria universitaria all'interno del campus UNIBO di Cesena
                    </p>
                </div>

                <!-- Right-aligned links -->
                <div class="col-md-7">
                    <div class="row text-md-end">
                        <!-- Features -->
                        <div class="col-6 col-md-4 mb-4">
                            <h6 class="fw-semibold mb-3">Features</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Ordini online</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Menu del giorno</a></li>
                            </ul>
                        </div>

                        <!-- Learn More -->
                        <div class="col-6 col-md-4 mb-4">
                            <h6 class="fw-semibold mb-3">Learn more</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Chi siamo</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Dove siamo</a></li>
                            </ul>
                        </div>

                        <!-- Support -->
                        <div class="col-6 col-md-4 mb-4">
                            <h6 class="fw-semibold mb-3">Support</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-decoration-none text-dark">Contattaci</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Repo</a></li>
                                <li><a href="#" class="text-decoration-none text-dark">Legal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="text-center text-muted small">
                © 2025 Volume — Tutti i diritti riservati
            </div>
        </div>
    </footer>
</body>
</html>