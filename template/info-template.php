<?php
renderHero(
    "Scopri chi siamo",
    "Il Team di Volume",
    "Studenti dell'Università di Bologna - Campus di Cesena. Questo progetto è stato realizzato per il corso di Tecnologie Web."
);
?>

<section class="py-4">
    <div class="mb-5">
        <h2 class="mb-4">Il Nostro Team</h2>
        <div class="row g-4">
            <?php
            foreach($teamMembers as $member):
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title fw-bold display-9">
                                <?= htmlspecialchars($member["name"] . " " . $member["surname"]) ?>
                            </h3>
                            <a href="mailto:<?= htmlspecialchars($member["email"]) ?>" 
                               class="text-decoration-none">
                                <?= htmlspecialchars($member["email"]) ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div class="mt-5 pt-4 border-top">
        <h3 class="mb-4">Repository del Progetto</h3>
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div>
                        <h3 class="card-title fw-bold mb-2 display-9">Volume - Caffetteria Universitaria</h3>
                        <p class="card-text text-muted mb-0">
                            Sistema di prenotazione online per la caffetteria del Campus di Cesena
                        </p>
                    </div>
                    <a href="https://github.com/Sohaib-Ouakani/Web-Technology-Project" 
                       target="_blank"
                       class="btn btn-primary">
                        Vai alla Repository
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>