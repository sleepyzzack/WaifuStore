<?php
require_once('modificar_producto.php');

    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["titulo"]) and !empty($_POST["categoria"]) and !empty($_POST["price"]) and !empty($_POST["descripcion"])){
            $titulo = $_POST["titulo"];
            $cat = $_POST["categoria"];
            $precio = (float) $_POST["price"];
            $desc = $_POST["descripcion"];
            $id = $_GET["id"];

            $sql = $connect->query("UPDATE books SET book_name='$titulo', book_category='$cat', book_price=$precio, book_description='$desc' WHERE id_books=$id");
        
            if($sql==1){
                echo '<div class="alert alert-success">se ha registrado con exito!!</div>';
                header('Location:index.php');
            }else{
                echo '<div class="alert alert-danger">no se pudo registrar F</div>';
    
            }

        }else{
            echo '<div class="alert alert-warning">wtf escucho borroso, o no has escrito nada</div>';
        }

    }



?>