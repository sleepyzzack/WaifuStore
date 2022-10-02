<?php 

if(!empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = $connect->query(" DELETE FROM books WHERE id_books=$id ");

    if($sql==1){
        echo '<div class="alert alert-success">se ha exterminado violentamente con exito!!</div>';

    }else{
        echo '<div class="alert alert-danger">no se pudo eliminar F OwO</div>';
    }

}







?>