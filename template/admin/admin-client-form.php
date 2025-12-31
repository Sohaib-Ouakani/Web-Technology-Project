<?php 
    $client = $templateParams["client"]; 
    $action = getActionText($templateParams["action"])
?>
<div class="row justify-content-center mt-3">
    <div class="col-12 col-md-4">
        <form action="admin-client-process.php" method="post" class="bg-secondary rounded p-4">
            <h2 class="fw-bold">Gestisci Cliente</h2>
            <?php if($client == null): ?>
                <p class="alert alert-warning text-center">
                    Cliente non trovato
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
                        value="<?= $client['Name'] ?? ""; ?>"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label fw-semibold">
                        Cognome
                    </label>
                    <input 
                        type="text" 
                        name="surname" 
                        id="surname" 
                        class="form-control" 
                        value="<?= $client['Surname'] ?? ""; ?>"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold">
                        Username
                    </label>
                    <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        class="form-control" 
                        value="<?= $client['Username']; ?>"
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">
                        Password<?php if($templateParams["action"]!=1) echo " (lascia vuoto per non modificare)"; ?>
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="form-control" 
                        <?php if ($templateParams["action"]==1) echo "required"; ?>
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                    />
                </div>
                <div class="mb-4">
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            name="isadmin" 
                            id="isadmin" 
                            class="form-check-input" 
                            value="1"
                            <?php if($client['IsAdmin']) echo "checked"; ?>
                            <?php if ($templateParams["action"]==3) echo "disabled";?>
                        />
                        <label for="isadmin" class="form-check-label fw-semibold">
                            Amministratore
                        </label>
                    </div>
                </div>
                <?php if($templateParams["action"]!=1): ?>
                    <input type="hidden" name="clientid" value="<?php echo $client["ID"]; ?>" />
                <?php endif; ?>
                <input type="hidden" name="action" value="<?php echo $templateParams["action"]; ?>" />
                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $action ?>">
                    <a href="admin-clients-home.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>