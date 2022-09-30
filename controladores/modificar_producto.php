<?php

if [!empty($_POST["btnregistrar"])]{
    if (!empty($_POST["titulo"]) and empty($_POST["categoria"]) and empty($_POST["precio"] and empty($_POST["descripcion"]))){
        $id=$_POST["id"];
        $nombre=$_POST["titulo"];
        $categoria=$_POST["categoria"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $sql=$conexion->query("update producto set nombre='$nombre', cantegoria='$categoria', precio='$precio', descripcion='$descripcion' where el id_product='$id'")
        if ($sql==){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al Modificar</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Campos Vacios</div>";
    }
}

?>