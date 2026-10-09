<?php
require_once("../controllers/islogged_controller.php");
isAdminExit();

include("../includes/header.php");
include("../includes/navbar_test.php");
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <h2 class="text-center mb-4">Crear producte</h2>

            <form action="../controllers/product_controller.php" method="POST" class="border p-4 bg-light"
                enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text" name="brand" id="brand" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Preu</label>
                    <input type="number" name="price" id="price" class="form-control" min="0" step="0.01" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripcio</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imatge</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>

                <hr>

                <h4 class="mb-3">Caracteristiques</h4>

                <div class="mb-3">
                    <label for="screen" class="form-label">Pantalla</label>
                    <input type="number" name="screen" id="screen" class="form-control" step="0.1" min="0" required>
                </div>

                <div class="mb-3">
                    <label for="ram" class="form-label">RAM</label>
                    <input type="number" name="ram" id="ram" class="form-control" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="CPU" class="form-label">CPU</label>
                    <input type="text" name="CPU" id="CPU" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="storage" class="form-label">Emegatzematge</label>
                    <input type="text" name="storage" id="storage" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="graphics_card" class="form-label">Gráfica</label>
                    <input type="text" name="graphics_card" id="graphics_card" class="form-control" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Crear producte</button>
                </div>

                <div class="mt-3 text-center">
                    <p class="form-label mb-3 text-danger fw-bold fs-6"></p>
                    <p class="form-label mb-3 text-success fw-bold fs-6"></p>
                </div>

            </form>

        </div>

    </div>

</div>

<?php

include('../includes/footer.php');

?>