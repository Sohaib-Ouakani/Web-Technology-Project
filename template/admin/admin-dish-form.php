<?php 
    $dish = $templateParams["dish"]; 
    $action = getActionText($templateParams["action"])
?>
<div class="row justify-content-center mt-3">
    <div class="col-12 col-md-4">
        <form action="admin-dish-process.php" enctype="multipart/form-data" method="post" class="bg-secondary rounded p-4">
            <h2 class="fw-bold">Gestisci Piatto</h2>
            <?php if($dish == null): ?>
                <p class="alert alert-warning text-center">
                    Piatto non trovato
                </p>
            <?php else: ?>
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">
                        Nome
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control" 
                        value="<?= $dish['Name'] ?? ""; ?>"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">
                        Descrizione
                    </label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        rows="3"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                        required
                    ><?= $dish['Description'] ?? ""; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="dishimg" class="form-label fw-semibold">
                        Immagine Piatto
                    </label>
                    <input 
                        type="file" 
                        name="dishimg" 
                        id="dishimg" 
                        class="form-control"
                        accept="image/*"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                    />
                    <?php if($templateParams["action"]!=1): ?>
                        <div class="mt-3 text-center">
                            <img 
                                src="<?php echo UPLOAD_DIR.$dish["ImagePath"]; ?>" 
                                alt="Anteprima piatto" 
                                class="img-fluid rounded shadow-sm admin-form-preview-img"
                            />
                            <p class="text-muted small mt-2">Immagine corrente</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-4">
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            name="special" 
                            id="special" 
                            class="form-check-input" 
                            value="1"
                            <?php if($dish['Special']) echo "checked"; ?>
                            <?php if ($templateParams["action"]==3) echo "disabled";?>
                        />
                        <label for="special" class="form-check-label fw-semibold">
                            Piatto Speciale
                        </label>
                    </div>
                </div>
                <?php if($templateParams["action"]!=1): ?>
                    <input type="hidden" name="dishid" value="<?php echo $dish["ID"]; ?>" />
                <?php endif; ?>
                <input type="hidden" name="action" value="<?php echo $templateParams["action"]; ?>" />
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $action ?>" />
                    <a href="admin-dishes-home.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>