<?php
require_once('modificar_producto.php');
require('uploadImg.php');

class edit{
    
    public function mod($connect){
       if(!empty($_POST["btnregistrar"])){
            if(!empty($_POST["titulo"]) and !empty($_POST["categoria"]) and !empty($_POST["price"]) and !empty($_POST["descripcion"])){
                $titulo = $_POST["titulo"];
                $cat = $_POST["categoria"];
                $precio = (float) $_POST["price"];
                $desc = $_POST["descripcion"];
                $id = $_GET["id"];
                $img = img::upload();
                echo $img;
                $sql = $connect->query("UPDATE books SET book_name='$titulo', book_category='$cat', book_price=$precio, book_description='$desc',  book_img='$img' WHERE id_books=$id");
            
                if($sql==1){
                    echo '<div class="alert alert-success" id="borrame" onClick="borrar()">se ha registrado con exito!!</div>';
                    header('Location:index.php');
                }else{
                    echo '<div class="alert alert-danger">no se pudo registrar F</div>';
                    header('Location:index.php');
                }

            }else{
                echo '<div class="alert alert-warning">wtf escucho borroso, o no has escrito nada</div>';
            }

        }
    }

}

?>