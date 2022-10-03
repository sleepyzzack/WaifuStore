<?php

include "modelos/conexion.php";
$id = $_GET["id"];
$sql = $connect->query("SELECT * FROM books WHERE id_books = $id");

?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta chasrset="UTF-8">
        <meta http-equiv="X-UX-Compatible" content="IE=edge">
        <meta name="viewimport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <form class="col-4 p-3 m-auto" method="POST" enctype="multipart/form-data">
            <h5 class="text-center alert alert-secondary">Modificar</h5>
            <input type="hidden" name="id" value="<? $_GET['id'] ?>">

            <?php
            include("controladores/editar.php");
            //ed = editar aqui se instancia el objeto xd
            $ed = new edit();
            $ed->mod($connect);
            while ($datos = $sql->fetch_object()) { ?>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $datos->book_name ?>">
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
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
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="price" id="price" value="<?= $datos->book_price ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $datos->book_description ?>">
                </div>
                
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Imagen</label>
                    <input class="form-control" name="foto" id="foto" type="file">
                </div>    
            
            <?php }
            ?>
            

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Actualizar</button>
        </form>
    </body>

    </html>