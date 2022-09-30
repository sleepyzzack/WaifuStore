<?php
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $query = $conexion->query("DELETE FROM books WHERE id_books=$id");
        if ($query == 1) {
            echo '<div>Libro eliminado correctamente</div>' ;
        }else {
            echo '<div>Fallo la consulta</div>' ;

        }
    }