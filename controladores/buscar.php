<?php

require_once("../modelos/conexion.php");


$nombre = $_POST["buscar"];
$buscador = $connect->query("SELECT * FROM books WHERE book_name LIKE LOWER('%" . $nombre . "%')");
$numero = mysqli_num_rows($buscador);



//$resultado = mysqli_fetch_assoc($buscador)

?>
<h5>Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while ($datos = $buscador->fetch_assoc()) { ?>

  <div class="card">
    <div class="card__body">
      <?php

      $foto = '../img/' . $datos["book_img"];
      $tipo = explode(".", $datos["book_img"]);
      //$tipoStr = $tipo[1];
      //print_r($datos["book_img"]);

      if (file_exists($foto) and strtolower(end($tipo)) == "png" or strtolower(end($tipo)) == "jpg") {
      ?>
        <img src="img/<?= $datos["book_img"] ?>" class="card__img">
      <?php } elseif (file_exists($foto) and strtolower(end($tipo)) == "mp4") { ?>

        <video src="img/<?= $datos["book_img"]; ?>" class="card__img" controls></video>

      <?php } else { ?>
        <img src="assets/imagenes/not-found.jpg" class="card__img">
      <?php } ?>
    </div>
    <p class="card__name"><?= $datos["book_name"] ?></p>
    <p class="card__category">Categoria: <?= $datos["book_category"] ?></p>
    <p class="card__price">$<?= $datos["book_price"]; ?></p>
    <a class="card__button" href="vistas/comprar.php?id=<?= $datos["id_books"] ?>">
      Comprar
    </a>
  </div>
<?php } ?>