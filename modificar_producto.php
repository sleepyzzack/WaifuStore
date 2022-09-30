<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("select*fomr producto where id_producto=$id");

?>

<DOCTYPE html>
<html lang="en">
    <head>
        <meta chasrset="UTF-8">
        <meta http-equiv="X-UX-Compatible" content="IE=edge">
        <meta name="viewimport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h5 class="text-center alert alert-secondary">Modificar Productos</h5>
    <input type="hidden" name="id" value="<?$_GET["id"]?>">
    <?php
    include "controlador/modificar_producto.php";
    while ($datos=$sql->fetch_object()) {?>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<? $datos->book_name ?>">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" value="<? $datos->book_category ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" name="price" id="price" value="<? $datos->book_price ?>">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<? $datos->book_description ?>">
            </div> 
    <?php}
    ?>

            <button type="submit" class="btn btn-primary" name="btnregistrar">Actualizar Producto</button>
        </form>
</body>
</html>
