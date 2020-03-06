<?php
include("template/header.php"); ?>

<h1 class="text-white col-12 text-center">Niveau de Difficultée</h1>
<div class="row col-12 m-0 p-0 bg-page" style="min-height: 100vh">
    <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
        <a href="<?= $url . '/type/' . $_GET['method'] ?>/facile" class="backgroundButton col-lg-8 mx-auto my-auto">
            <p class="p-5 text-white">Facile</p>
        </a>
    </div>
    <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
        <a href="<?= $url . '/type/' . $_GET['method'] ?>/moyen" class="backgroundButton col-lg-8 mx-auto my-auto">
            <p class="p-5 text-white">Moyen</p>
        </a>
    </div>
    <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
        <a href="<?= $url . '/type/' . $_GET['method'] ?>/difficile" class="backgroundButton col-lg-8 mx-auto my-auto">
            <p class="p-5 text-white">J'suis chaud</p>
        </a>
    </div>
</div>

<?php
include("template/footer.php");
