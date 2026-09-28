<?php
function getItemById($id)
{
    include("../model/items.php");

    foreach ($items as $item) {
        if ($item["id"] == $id) {
            return $item;
        }
    }
    return false;
}

function displayProducts()
{

    if ($_SESSION['LANG_APP'] == 'ca') {
        include('../language/ca.php');
    }
    if ($_SESSION['LANG_APP'] == 'an') {
        include('../language/an.php');
    }
    include("../model/items.php");
    include("../model/routes.php");

    ?>

    <div class="container text-center">
        <div class="row">

            <?php foreach ($items as $item) { ?>
                <div class="col-12 col-md-6 col-lg-4 p-3">
                    <a href="../views/item.php?id=<?= $item["id"] ?>" class="card-link" ?>
                    <div class="card shadow-lg h-100 p-3">
                        <img src="<?= $directories['productsImgDir'] . "/" . $item["image"] ?> "class="card-img-top h-75 object-fit-contain"
                            alt="<?= $directories['productsImgDir'] . "/image-not-found.png" ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item["name"] ?></h5>
                            <p class="card-text">
                                <?= $item["description"] ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4><?= $item["price"] ?> €</h4>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a?></a>
                        </div>
                    </div>
                    </a>
                </div>
                

            <? } ?>

        </div>
    </div>

<? }

function displayOneItem()
{
    include("../model/items.php");
    include("../model/routes.php");
    if ($_SESSION['LANG_APP'] == 'ca') {
        include('../language/ca.php');
    }
    if ($_SESSION['LANG_APP'] == 'an') {
        include('../language/an.php');
    }
    $id = $_GET['id'];
    $item = getItemById($id);

    if (isset($_GET['id'])) {

        ?>
        
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 p-3">
                    <div class="card">
                        <img class="img-fluid object-fit-contain" src="<?= $directories["productsImgDir"] . $item["image"] ?>">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 p-3">
                    <div class="card text-start p-3">
                    <h5 class="card-title fw-bold"><?=$item["price"]. "€"?></h5>   
                    <p class="card-text"><?=$item["brand"]?></p>
                    <p class="card-text"><?=$item["name"]?></p>
                    <p class="card-text"><?=$item["description"]?></p>
                    <pre text-start>
                        <?= print_r($item["features"]);?>
                    </pre>
                    <button type="submit" class="btn btn-primary"><?=$text["buy"]?></button>
                    </div>
                </div>
            </div>
        </div>
    <? } else {
        //header("HTTP/1.1 404 Not Found");
    }
    ?>
    ?>


<? } ?>