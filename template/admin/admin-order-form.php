<?php 
    $order = $templateParams["dish"]; 
    $action = getActionText($templateParams["action"])
?>
<div class="row justify-content-center mt-3">
    <div class="col-12 col-md-4">
        <form action="admin-order-process.php" enctype="multipart/form-data" method="post" class="bg-secondary rounded p-4">
            <h2 class="fw-bold">Gestisci Ordine</h2>
            <?php if($order == null): ?>
                <p class="alert alert-warning text-center">
                    Piatto non trovato
                </p>
            <?php else: ?>
            <div class="mb-3">
                <label for="clientid" class="form-label fw-semibold">
                Seleziona il Cliente
                </label>
                <select name="clientid" id="clientid"
                    class="form-select" 
                    <?= ($templateParams["action"] == 3) ? "disabled" : "" ?>>

                    <?php foreach($templateParams["users"] as $user): ?>
                        <option value="<?php echo $user["ID"]; ?>" <?php if($user["ID"] == $order["USER_ID"] && $templateParams["action"]!=1) echo "selected";?>>
                            <?= 
                                htmlspecialchars($user["Name"]) . " " . htmlspecialchars($user["Surname"]);
                            ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="mb-3">
                <label for="dishid" class="form-label fw-semibold">
                    Seleziona il piatto
                </label>
                <select name="dishid" id="dishid" class="form-select" <?= ($templateParams["action"] == 3) ? "disabled" : "" ?>>

                    <?php foreach($templateParams["menu"] as $dish): ?>
                        <option value="<?php echo $dish["ID"]; ?>" <?php if($dish["ID"] == $order["DISH_ID"] && $templateParams["action"]!=1) echo "selected";?>>
                            <?= htmlspecialchars($dish["Name"]); ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="mb-3">
                <label for="datetime" class="form-label fw-semibold">
                    Seleziona orario prenotazione
                </label>
                <input 
                    type="datetime-local" 
                    name="datetime" 
                    id="datetime" 
                    class="form-control" 
                    value="<?= $order['OrderDate']?>"
                    <?php if ($templateParams["action"]==3) echo "disabled";?>
                    required
                />
            </div>
            <div class="mb-4">
                <div class="form-check">
                    <input 
                        type="checkbox" 
                        name="iscomplete" 
                        id="iscomplete" 
                        class="form-check-input" 
                        value="1"
                        <?php if($order['IsComplete']) echo "checked"; ?>
                        <?php if ($templateParams["action"]==3) echo "disabled";?>
                    />
                    <label for="iscomplete" class="form-check-label fw-semibold">
                        Ordine Completato
                    </label>
                </div>
            </div>
            <?php if($templateParams["action"]!=1): ?>
                <input type="hidden" name="orderid" value="<?php echo $order["ID"]; ?>" />
            <?php endif; ?>
            <input type="hidden" name="action" value="<?php echo $templateParams["action"]; ?>" />

            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary btn-lg" value="<?php echo $action ?>" />
                <a href="admin-orders-home.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
            </div>

            <?php endif; ?>
        </form>
    </div>
</div>