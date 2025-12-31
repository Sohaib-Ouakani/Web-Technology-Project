<?php
function isUserLoggedIn() {
    return !empty($_SESSION['id']);
}

function registerLoggedUser($user) {
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["username"];
    $_SESSION["surname"] = $user["surname"];
    $_SESSION["name"] = $user["name"];
    $_SESSION["admin"] = $user["isadmin"];
}

function getEmptyOrder() {
    return array(
        "DISH_ID" => "", 
        "OrderDate" => "", 
    );
}

function getEmptyClientForAdmin() {
    return array(
        "Name" => "", 
        "Username" => "",
        "Password" => "",
        "IsAdmin" => "", 
    );
}

function getEmptyDishForAdmin() {
    return array(
        "Name" => "", 
        "Description" => "",
        "ImagePath" => "",
        "Special" => "", 
    );
}

function getEmptyOrderForAdmin() {
    return array(
        "DISH_ID" => "", 
        "USER_ID" => "",
        "OrderDate" => "",
        "IsComplete" => "", 
    );
}

function getActionText($action){
    $result = "";
    switch($action){
        case 1:
            $result = "Inserisci";
            break;
        case 2:
            $result = "Modifica";
            break;
        case 3:
            $result = "Cancella";
            break;
    }

    return $result;
}

function isUserAdmin() {
    return isUserLoggedIn() && ($_SESSION["admin"] == true);
}

function renderHero($preamble, $main, $description) {
    ?>
    <section class="hero pt-5">
        <p class="text-muted mb-1"><?= htmlspecialchars($preamble) ?></p>
        <h2 class="display-5 fw-bold mb-3"><?= nl2br(htmlspecialchars($main)) ?></h2>
        <p class="lead text-muted mb-4" style="max-width: 750px;"><?= htmlspecialchars($description) ?></p>
        <hr>
    </section>
    <?php
}

function renderLittleHero($main, $description) {
    ?>
    <section class="hero pt-5">
        <h2 class="display-7 fw-bold mb-3"><?= nl2br(htmlspecialchars($main)) ?></h2>
        <p class="lead text-muted mb-4" style="max-width: 750px;"><?= htmlspecialchars($description) ?></p>
        <hr>
    </section>
    <?php
}
?>