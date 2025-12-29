<?php 
    $order = $templateParams["order"]; 
    $action = getActionText($templateParams["action"])
?>
<form action="precess-order.php" method="post">
    <h2>Gestisci Ordine</h2>
    <?php if($order==null): ?>
    <p>Ordine non trovato</p>
    <?php else: ?>
    <ul>
        <li>
            <label>
                Seleziona il piatto: 
                <select name="dishid">
                    <?php foreach($templateParams["menu"] as $dish): ?>
                        <option value="<?php echo $dish["ID"]; ?>">
                            <?php echo $dish["Name"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
        </li>
        <li>
            <label>
                Seleziona orario prenotazione:
                <input type="datetime-local" name="datetime"/>
            </label>
        </li>
    </ul>
    <input type="submit" value="<?php echo $action ?>">
    <a href="login.php">Annulla</a>

    <input type="hidden" name="order" value="<?php echo $templateParams["order"]; ?>" />

    <?php endif; ?>
</form>