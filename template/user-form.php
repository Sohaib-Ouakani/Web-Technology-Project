<?php 
    $order = $templateParams["order"]; 
    $action = getActionText($templateParams["action"])
?>
<form action="" method="post">
    <h2>Gestisci Ordine</h2>
    <?php if($order==null): ?>
    <p>Ordine non trovato</p>
    <?php else: ?>
        
    <?php endif; ?>
</form>