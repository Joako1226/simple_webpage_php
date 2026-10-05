<?php
if (isset($_SESSION['kart'])) {
    $kart = $_SESSION['kart'];
} else {
    $kart = [];
}

$totalcarret = 0;

?>

<h2 class="mb-4"><?= $text['shpoingCart'] ?></h2>

<table class="table table-striped align-middle">

    <?php
    foreach ($kart as $item) {
        $totalcarret += $item['item']['price'] * $item['quantity'];

        ?>
        <div class="container mt-5">



            <thead class="table-dark">
                <tr>
                    <th><?= $text['product'] ?></th>
                    <th><?= $text['price'] ?></th>
                    <th class="text-center"><?= $text['quantity'] ?></th>
                    <th><?= $text['cartSubtotal'] ?></th>
                </tr>
            </thead>

            <tbody>



                <tr>

                    <td>
                        <div class="d-flex align-items-center">

                            <img src="<?= $_SESSION["routes"]["productsImgDir"] . $item["item"]["image"] ?>"
                                alt="Nom de la imatge" class="rounded me-3"
                                style="width: 70px; height: 70px; object-fit: cover;">

                            <div>
                                <strong>
                                    <?= $item["item"]["name"] ?>
                                </strong>

                                <p class="text-muted small mb-0">
                                    <?= $item["item"]["description"] ?>
                                </p>
                            </div>

                        </div>
                    </td>

                    <td>
                        <?= $item["item"]["price"] ?> €
                    </td>

                    <td class="text-center">

                        <a href="../controllers/sub_cart_controller.php?id=<?= $item["item"]["id"] ?>"
                            class="btn btn-outline-danger btn-sm">
                            -
                        </a>

                        <span class="mx-3">
                            <?= $item["quantity"] ?>
                        </span>

                        <a href="../controllers/sum_cart_controller.php?id=<?= $item["item"]["id"] ?>"
                            class="btn btn-outline-success btn-sm">
                            +
                        </a>

                    </td>

                    <td>
                        <?= $item["item"]["price"] * $item["quantity"] ?> €
                    </td>

                </tr>



            </tbody>

        <? } ?>

        <tfoot>
            <tr class="table-light">
                <th colspan="3" class="text-end">
                    Total del carret:
                </th>

                <th>
                    <?= $totalcarret; ?>€
                </th>
            </tr>
        </tfoot>

</table>

<div class="d-flex justify-content-end mt-4">

    <a href="../controllers/add_historic_controller.php"
   class="btn btn-success btn-lg">
    Confirmar compra
</a>

</div>

</div>