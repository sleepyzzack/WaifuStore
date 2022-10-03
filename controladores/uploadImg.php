<?php

class img{

    public static function upload(){

        $carpeta = __DIR__.'/../img/';
        $archivo = $carpeta.$_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);

        return $_FILES['foto']['name'];
    }

}


?>