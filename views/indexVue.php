<?php
include("template/header.php"); ?>

<div class="row col-12 m-0 p-0 bg-page" style="min-height: 100vh">
  <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
    <a href="<?= $url ?>/difficult/addition" class="backgroundButton col-lg-8 mx-auto my-auto">
      <p class="p-5 text-white">Addition</p>
    </a>
  </div>
  <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
    <a href="<?= $url ?>/difficult/soustraction" class="backgroundButton col-lg-8 mx-auto my-auto">
      <p class="p-5 text-white">Soustraction</p>
    </a>
  </div>
  <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
    <a href="<?= $url ?>/difficult/division" class="backgroundButton col-lg-8 mx-auto my-auto">
      <p class="p-5 text-white">Division</p>
    </a>
  </div>
  <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
    <a href="<?= $url ?>/difficult/multiplication" class="backgroundButton col-lg-8 mx-auto my-auto">
      <p class="p-5 text-white">Multiplication</p>
    </a>
  </div>
  <div class="col-lg-4 m-0 p-0 text-center mx-auto d-flex">
    <a href="<?= $url ?>/difficult/full" class="backgroundButton col-lg-8 mx-auto my-auto">
      <p class="p-5 text-white">Full</p>
    </a>
  </div>
</div>

<?php
include("template/footer.php");
