<?php


class regis{
    
    public function add($connect){
        if(!empty($_POST["btnregistrar"])){
            if(!empty($_POST["titulo"]) and !empty($_POST["categoria"]) and !empty($_POST["precio"]) and !empty($_POST["descripcion"])){
                            
                $titulo = $_POST["titulo"];
                $cat = $_POST["categoria"];
                $precio = (float) $_POST["precio"];
                $desc = $_POST["descripcion"];
                        
                                
                $sql = $connect->query("INSERT INTO books (book_name, book_category, book_price, book_description) VALUES ('$titulo', '$cat', $precio, '$desc')");
                
                if($sql==1){
                    echo '<div class="alert alert-success">se ha registrado con exito!!</div>';

                }else{
                    echo '<div class="alert alert-danger">no se pudo registrar F</div>';
                }

            }else{
                echo '<div class="alert alert-warning">wtf escucho borroso, o no has escrito nada</div>';
                }
        }
    }

}




?>
