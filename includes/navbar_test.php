<?php
$text = [];
if ($_SESSION['LANG_APP'] == 'ca') {
  include('../language/ca.php');
}
if ($_SESSION['LANG_APP'] == 'an') {
  include('../language/an.php');
}
$currentPage = basename($_SERVER['PHP_SELF']);
include("../model/routes.php");

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <a class="navbar-brand" href="./home.php"><img width="50px" height="50px" src="../public/images/app/Logo.png">
      <?= $text['title_index'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php if (isset($_SESSION['user_logged'])) { ?>
            <a class="nav-link active" href="?logout=1">Logout</a>
          <?php }
            else { ?>
            <a class="nav-link active" href="./login.php">Login</a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./register.php"><?= $text['register'] ?></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $text['language'] ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"
                href="../controllers/language_controller.php?lang=ca&redirect=<?= $currentPage ?>"><?= $text['lang_ca'] ?></a>
            </li>
            <li><a class="dropdown-item"
                href="../controllers/language_controller.php?lang=an&redirect=<?= $currentPage ?>"><?= $text['lang_an'] ?></a>
            </li>
          </ul>
        </li>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="../controllers/filter_controller.php" method="POST">
              <input name="text" class="form-control me-2" type="search" placeholder="<?= $text['search'] ?>" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit"><?= $text['search'] ?></button>
            </form>
          </div>
        </nav>
        <div>
          <a href="./cart.php"> <i class="bi bi-cart-check-fill">cart</i></a>
         
          <?php
          if (isset($_SESSION['user_logged'])) { ?>
            <img width="50px" height="50px" class="rounded-circle text-end"
              src="<?= $directories["uploadDir"] . "/" . $_SESSION['user_logged']['image'] ?>">
          <?php } else {
            ?>
            <p><?= $text["unlogged"] ?></p>
          <?php }
          ?>


        </div>
    </div>
  </div>
</nav>