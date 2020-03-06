<?php
include("template/header.php"); ?>

<h1 class="text-white col-12 text-center size50 my-auto position-absolute pt-5">Type d'écriture</h1>
<div class="row col-12 m-0 p-0 bg-page text-center" style="min-height: 100vh">
    <div class="col-8 col-lg-4 m-0 p-0 text-center mx-auto d-flex">
        <a href="<?= $url . '/exercice/' . $_GET['method'] . '/' . $_GET['difficult'] ?>/colonne" class="backgroundButton col-lg-8 mx-auto my-auto">
            <p class="p-2 p-md-5 my-auto text-white">En colonne</p>
        </a>
    </div>
    <div class="col-8 col-lg-4 m-0 p-0 text-center mx-auto d-flex">
        <a href="<?= $url . '/exercice/' . $_GET['method'] . '/' . $_GET['difficult'] ?>/ligne" class="backgroundButton col-lg-8 mx-auto my-auto">
            <p class="p-2 p-md-5 my-auto text-white">En ligne</p>
        </a>
    </div>
</div>

<?php
include("template/footer.php");
