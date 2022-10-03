<?php 

if(!empty($_GET["id"])){

    $id = $_GET["id"];
    $sql = $connect->query(" DELETE FROM books WHERE id_books=$id ");

    if($sql==1){
        header('Location: index.php');
    }else{
        echo '<div class="alert alert-danger" id="borrame" onClick="borrar()">no se pudo eliminar F OwO</div>';
    }

}

?>