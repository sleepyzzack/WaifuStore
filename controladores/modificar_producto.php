<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["titulo"]) and empty($_POST["categoria"]) and empty($_POST["precio"] and empty($_POST["descripcion"]))) {
        $id = $_POST["id"];
        $nombre = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];
        $sql = $conexion->query("UPDATE books SET book_name='$nombre', book_category='$categoria', book_price='$precio', book_description='$descripcion' WHERE id_books='$id'");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al Modificar</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos Vacios</div>";
    }
}
