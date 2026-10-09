<?php

function getItemById($id)
{
    $items = $_SESSION["products"];

    foreach ($items as $item) {
        if ($item["id"] == $id) {
            return $item;
        }
    }
    return false;
}

function displayProducts($filter_name)
{

    if ($_SESSION['LANG_APP'] == 'ca') {
        include('../language/ca.php');
    }
    if ($_SESSION['LANG_APP'] == 'an') {
        include('../language/an.php');
    }

    include("../model/routes.php");

    ?>

    <div class="container text-center">
        <div class="row">
            <?php foreach ($_SESSION["products"] as $item) {
                if ($filter_name == null || str_contains(strtoupper($item["brand"]), strtoupper($filter_name))) {
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 p-3 product">
                        <a href="../views/item.php?id=<?= $item["id"] ?>" class="card-link" ?>
                            <div class="card shadow-lg h-100 p-3 product">
                                <img src="<?= $directories['productsImgDir'] . "/" . $item["image"] ?> "
                                    class="card-img-top h-75 object-fit-contain"
                                    alt="<?= $directories['productsImgDir'] . "/image-not-found.png" ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item["brand"] . " " . $item["name"] ?></h5>
                                    <p class="card-text">
                                        <?= $item["description"] ?>
                                    </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $item["price"] ?> €</h4>
                                    </li>
                                </ul>
                                <form action="../controllers/add_cart_controller.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                                <div class="card-body">
                                    <a>

                                    </a>

                                </div>
                            </div>
                        </a>
                    </div>


                <? }
            } ?>

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
                        <h5 class="card-title fw-bold"><?= $item["price"] . "€" ?></h5>
                        <p class="card-text"><?= $item["brand"] ?></p>
                        <p class="card-text"><?= $item["name"] ?></p>
                        <p class="card-text"><?= $item["description"] ?></p>

                        <pre text-start>
                            <?= print_r($item["features"]); ?>
                        </pre>
                        
                        <a>
                            
                           
<button type="submit" class="btn btn-primary"><?= $text["buy"] ?></button>
                        </a>
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