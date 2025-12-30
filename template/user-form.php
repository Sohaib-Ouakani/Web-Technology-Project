<?php 
    $order = $templateParams["order"]; 
    $action = getActionText($templateParams["action"])
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 rounded bg-secondary p-4">
        <form action="process-order.php" method="post">
            <h2 class="fw-bold">Gestisci Ordine</h2>
            <?php if($order == null): ?>
                <p class="alert alert-warning text-center">
                    Ordine non trovato
                </p>
            <?php else: ?>

            <div class="mb-3">
                <label for="dishid" class="form-label fw-semibold">
                    Seleziona il piatto
                </label>
                <select name="dishid" id="dishid" class="form-select">
                    <?php foreach($templateParams["menu"] as $dish): ?>
                        <option value="<?php echo $dish["ID"]; ?>">
                            <?php echo htmlspecialchars($dish["Name"]); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="datetime" class="form-label fw-semibold">
                    Seleziona orario prenotazione
                </label>
                <input 
                    type="datetime-local" 
                    name="datetime" 
                    id="datetime" 
                    class="form-control" 
                    required
                />
            </div>
            
            <?php if($templateParams["action"]!=1): ?>
            <input type="hidden" name="order" value="<?php echo $order["id"]; ?>" />
            <?php endif; ?>
            <input type="hidden" name="action" value="<?php echo $templateParams["action"]; ?>" />

            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $action ?>">
                <a href="login.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
            </div>

            <?php endif; ?>
        </form>
    </div>
</div>