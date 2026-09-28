<?php
    function loadBanner($title, $subtitle, $button, $image){
        include("../model/routes.php");
?>

<div class="container-fluid p-0">
    <div class="position-relative" style="height: 50vh;">
        <img 
            src="<?=$directories["bannersDir"] . $image?>" class="w-100 h-100 object-fit-cover" alt="Banner">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-3 fw-bold"><?=$title?></h1>
            <p class="fs-4"><?=$subtitle?></p>
            <?php
            if(!$button == "" && !$button == null){?>
            <a href="./products.php" class="btn btn-primary btn-lg"><?=$button?></a>
            <? }?>
        </div>

    </div>
</div>

    </div>
</div>
<?}?>