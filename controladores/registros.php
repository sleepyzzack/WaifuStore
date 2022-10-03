<?php
require_once('uploadImg.php');

class regis{
    
    public function add($connect){
        if(!empty($_POST["btnregistrar"])){
            if(!empty($_POST["titulo"]) and !empty($_POST["categoria"]) and !empty($_POST["precio"]) and !empty($_POST["descripcion"])){
                            
                $titulo = $_POST["titulo"];
                $cat = $_POST["categoria"];
                $precio = (float) $_POST["precio"];
                $desc = $_POST["descripcion"];
                $img = img::upload();
                                
                $sql = $connect->query("INSERT INTO books (book_name, book_category, book_price, book_description, book_img) VALUES ('$titulo', '$cat', $precio, '$desc', '$img')");
                
                if($sql==1){
                    echo '<div class="alert alert-success" id="borrame" onClick="borrar()>se ha registrado con exito!!</div>';
                    
                }else{
                    echo '<div class="alert alert-danger" id="borrame" onClick="borrar()>no se pudo registrar F</div>';
                  
                }

            }else{
                echo '<div class="alert alert-warning" id="borrame" onClick="borrar()">wtf escucho borroso, o no has escrito nada</div>';
                }
                
                
        }

    }
}





?>
