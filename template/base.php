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
    <div class="container">
        <header class="text-center fornt-monosopace py-3">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSirk_N-1SIL8YTXlgN7bNXnzOa08I2ZRx68w&s" 
                            alt="Volume Logo" 
                            class="me-3">
                        <h1 class="fw-bold mb-0">VOLUME</h1>
                    </a>
                </div>
            </div>
        </header>

        <div class="row"> 
            <nav class="col-12"> 
                <ul class="row nav nav-pills text-center">
                    <li class="col-6 col-md-3 nav-item p-2"><a href="menu.php" class="nav-link bg-primary text-black">Menu</a></li>
                    <li class="col-6 col-md-3 nav-item p-2"><a href="oggi.php" class="nav-link bg-primary text-black">Oggi</a></li>
                    <li class="col-6 col-md-3 nav-item p-2"><a href="info.php" class="nav-link bg-primary text-black">Chi Siamo</a></li>
                    <li class="col-6 col-md-3 nav-item p-2"><a href="login.php" class="nav-link bg-primary text-black"><?php if (isUserLoggedIn()) echo "Area personale"; else echo "Login"; ?></a></li>
                </ul>
            </nav>
        </div>

        <main>
            <?php
                if(isset($templateParams["nome"])){
                    require($templateParams["nome"]);
                }   
            ?>
        </main>
    </div>  
    <footer class="footer bg-primary mt-5 pt-5 pb-4 border-top">
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
                                <li><a href="order.php" class="text-dark">Ordini online</a></li>
                                <li><a href="menu.php" class="text-dark">Menu del giorno</a></li>
                            </ul>
                        </section>

                        <!-- Learn More -->
                        <section class="col-6 col-md-4 mb-4">
                            <h2 class="fw-semibold mb-3">Learn more</h2>
                            <ul class="list-unstyled">
                                <li><a href="info.php" class="text-dark">Chi siamo</a></li>
                                <li><a href="https://maps.app.goo.gl/C2M3G2Hvx2KVeAJ29" class="text-dark">Dove siamo</a></li>
                            </ul>
                        </section>

                        <!-- Support -->
                        <section class="col-6 col-md-4 mb-4">
                            <h2 class="fw-semibold mb-3">Support</h2>
                            <ul class="list-unstyled">
                                <li><a href="info.php" class="text-dark">Contattaci</a></li>
                                <li><a href="https://github.com/Sohaib-Ouakani/Web-Technology-Project" class="text-dark">Repo</a></li>
                                <li><a href="#" class="text-dark">Legal</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>