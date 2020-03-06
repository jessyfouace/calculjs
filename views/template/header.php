<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= $url ?>/favicon.ico" />
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?= $url ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $url ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?= $url ?>/assets/css/main.css">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
</head>

<body>

  <div class="p-2 pl-1 pr-1 col-12 m-0" style="position: absolute; z-index: 500">
    <a href="<?= $url ?>" class="header-link p-4 pl-1 pr-1">Accueil</a>

    <div class="dropdown">
      <button class="dropbtn">Exercice</button>
      <div class="dropdown-content">
        <div class="dropdownaddition">
          <a href="#">Addition</a>
          <div class="dropdown-content-addition">
            <a class="pl-4" href="<?= $url ?>/type/addition/facile">Facile</a>
            <a class="pl-4" href="<?= $url ?>/type/addition/moyen">Moyen</a>
            <a class="pl-4" href="<?= $url ?>/type/addition/difficile">Difficile</a>
          </div>
        </div>
        <div class="dropdownsoustraction">
          <a href="#">Soustraction</a>
          <div class="dropdown-content-soustraction">
            <a class="pl-4" href="<?= $url ?>/type/soustraction/facile">Facile</a>
            <a class="pl-4" href="<?= $url ?>/type/soustraction/moyen">Moyen</a>
            <a class="pl-4" href="<?= $url ?>/type/soustraction/difficile">Difficile</a>
          </div>
        </div>

        <div class="dropdownmultiplication">
          <a href="#">Multiplication</a>
          <div class="dropdown-content-multiplication">
            <a class="pl-4" href="<?= $url ?>/type/multiplication/facile">Facile</a>
            <a class="pl-4" href="<?= $url ?>/type/multiplication/moyen">Moyen</a>
            <a class="pl-4" href="<?= $url ?>/type/multiplication/difficile">Difficile</a>
          </div>
        </div>

        <div class="dropdowndivision">
          <a href="#">Division</a>
          <div class="dropdown-content-division">
            <a class="pl-4" href="<?= $url ?>/type/division/facile">Facile</a>
            <a class="pl-4" href="<?= $url ?>/type/division/moyen">Moyen</a>
            <a class="pl-4" href="<?= $url ?>/type/division/difficile">Difficile</a>
          </div>
        </div>

        <div class="dropdownfull">
          <a href="#">Full</a>
          <div class="dropdown-content-full">
            <a class="pl-4" href="<?= $url ?>/type/full/facile">Facile</a>
            <a class="pl-4" href="<?= $url ?>/type/full/moyen">Moyen</a>
            <a class="pl-4" href="<?= $url ?>/type/full/difficile">Difficile</a>
          </div>
        </div>

      </div>

    </div>

  <a href="<?= $url ?>/maj" class="dropbtn2 p-4 pl-1 pr-1">MAJ</a>

  </div>