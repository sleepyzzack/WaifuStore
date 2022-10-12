<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WaifuStore</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="extras/sendSearch.js"></script>
  <script src="extras/AdminUser.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./vistas/assets/css/normalize.css">
  <link rel="stylesheet" href="./vistas/assets/css/main.css">
  <link rel="stylesheet" href="./vistas/assets/css/navbar.css">
  <link rel="stylesheet" href="./vistas/assets/css/card.css">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar-header">
    <a class="navbar__title " onClick="createDiv()">WaifuStore</a>
    <div class="navbar__search">
      <label class="navbar__search-title">Buscador</label>
      <input class="navbar__search-input" onKeyUp="buscar_ahora($('#buscar').val())" type="text" id="buscar" name="buscar">
    </div>
  </nav>
  <!-- NAVBAR -->
  <div class="form-login__container" id="pass"></div>
  <div id="datos_buscador" class="main-container">

  </div>
  <main class="main-container" id="main">
    <?php
    include_once('modelos/conexion.php');
    $sql = $connect->query("SELECT * FROM books");
    while ($datos = $sql->fetch_object()) { ?>
      <div class="card">
        <div class="card__body">
          <?php

          $foto = 'img/' . $datos->book_img;
          $tipo = explode(".", $datos->book_img);
          if (file_exists($foto) and strtolower(end($tipo)) == "png" or strtolower(end($tipo)) == "jpg") {
          ?>
            <img src="<?php print $foto; ?>" class="card__img">
          <?php } elseif (file_exists($foto) and strtolower(end($tipo)) == "mp4") { ?>

            <video src="<?php print $foto; ?>" class="card__img" controls></video>

          <?php } else { ?>
            <img src="assets/imagenes/not-found.jpg" class="card__img">
          <?php } ?>
        </div>
        <p class="card__name"><?= $datos->book_name ?></p>
        <p class="card__category">Categoria: <?= $datos->book_category ?></p>
        <p class="card__price">$<?= $datos->book_price; ?></p>
        <a class="card__button" href="vistas\comprar.php?id=<?= $datos->id_books ?>">
          Comprar
        </a>
      </div>
    <?php } ?>
  </main>

  <script src="prueba\tienda-online\assets\js\jquery.min.js"></script>
  <script src="prueba\tienda-online\assets\js\bootstrap.min.js"></script>
</body>

</html>