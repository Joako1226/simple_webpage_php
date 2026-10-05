<?php
include("../includes/header.php");
include("../includes/navbar_test.php");

include("../includes/banner.php");
loadBanner($text["laptops"], $text["best"], null, "laptop_banner.jpg");

include("../functions/products_functions.php");
?>
<br>
<form class="d-flex p-3" role="search" action="../controllers/filter_controller.php" method="POST">
              <input name="text" class="form-control me-2" type="search" placeholder="<?= $text['name'] ?>" aria-label="Search" />
              <input name="category" class="form-control me-2" type="search" placeholder="<?= $text['category'] ?>" aria-label="Search" />
              <input name="price" class="form-control me-2" type="number" placeholder="<?= $text['maxPrice'] ?>" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit"><?= $text['search'] ?></button>
              
</form>

<?php
if (isset($_GET['filter'])) {
displayProducts($_GET['filter']);
}
else{
    displayProducts(null);
}
?>