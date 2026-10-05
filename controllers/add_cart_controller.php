<?php
include("../functions/products_functions.php");

session_start();

$itemId = $_POST["id"];
echo $itemId;
$itemToAdd = getItemById($itemId);
$_SESSION["products"];


if (!isset($_SESSION["kart"])) {
    $_SESSION["kart"] = [];
}

$kart = $_SESSION["kart"];

if (isset($kart[$itemId])) {
    $kart[$itemId]["quantity"]++;
} else {
    $kart[$itemId] = [
        "item" => $itemToAdd,
        "quantity" => 1
    ];
}

$_SESSION["kart"] = $kart;

?>
<pre>
<?=print_r($kart);?>
</pre>