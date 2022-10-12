<?php

include "modelos/conexion.php";
$id = $_GET["id"];
$sql = $connect->query("SELECT * FROM books WHERE id_books = $id");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta chasrset="UTF-8">
        <meta http-equiv="X-UX-Compatible" content="IE=edge">
        <meta name="viewimport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link rel="stylesheet" href="./vistas/assets/css/normalize.css">
        <link rel="stylesheet" href="./vistas/assets/css/form.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="form-container">
            <form class="form" method="POST" enctype="multipart/form-data">
                <h5 class="form__title">Modificar</h5>
                <input type="hidden" name="id" value="<? $_GET['id'] ?>">

                <?php
                include("controladores/editar.php");
                //ed = editar aqui se instancia el objeto xd
                $ed = new edit();
                $ed->mod($connect);
                while ($datos = $sql->fetch_object()) { ?>
                    <div class="form__input-container">
                        <label for="titulo" class="form__input-title">Titulo</label>
                        <input type="text" class="form__input" name="titulo" id="titulo" value="<?= $datos->book_name ?>">
                    </div>
                    <div class="form__input-container">
                        <label for="categoria" class="form__input-title">Categoria</label>
                        <select class="form__input" name="categoria" id="categoria">
                            <option disabled selected>Seleccione una categoria</option>
                            <option value="Accion">Accion</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Manga">Manga</option>
                            <option value="Novela">Novela</option>
                            <option value="Horror">Horror</option>
                            <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                        </select>

                    </div>
                    <div class="form__input-container">
                        <label for="price" class="form__input-title">Precio</label>
                        <input type="number" step="any" class="form__input" name="price" id="price" value="<?= $datos->book_price ?>">
                    </div>
                    <div class="form__input-container">
                        <label for="descripcion" class="form__input-title">Descripcion</label>
                        <textarea class="form__textarea" name="descripcion" id="descripcion" autocomplete="off" value="<?= $datos->book_description ?>">></textarea>
                    </div>

                    <div class="form__input-container">
                        <label for="descripcion" class="form__input-title">Imagen</label>
                        <input class="form__input" name="foto" id="foto" type="file">
                    </div>

                <?php }
                ?>


                <button type="submit" class="form__btn" name="btnregistrar" value="ok">Actualizar</button>
            </form>
        </div>
    </body>

    </html>