<?php
require("controladores/eliminar.php");
require("modelos/conexion.php");
$borrar = new eliminar();
$borrar->del($connect);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaifuStore</title>
    <link rel="stylesheet" href="./vistas/assets/css/normalize.css">
    <link rel="stylesheet" href="./vistas/assets/css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="extras\pop.js" crossorigin="juanito"></script>
    <script src="extras/confirmar.js"></script>
</head>

<body>

    <header class="header">
        <h1 class="main__title"> <a class="main__title-link" href="index.php">WaifuStore</a></h1>
        <a class="main__title-link" href="vistas/registrar.php">Añadir</a>
    </header>
    <main class="main element-center">
        <div class="table-container">
            <table class="table">
                <caption class="table__title">Registros</caption>
                <thead class="table__header">
                    <tr class="table__row">
                        <th class="table__column" scope="col">ID</th>
                        <th class="table__column" scope="col">Titulo</th>
                        <th class="table__column" scope="col">Categoria</th>
                        <th class="table__column" scope="col">Precio</th>
                        <th class="table__column" scope="col">Descripcion</th>
                        <th class="table__column" scope="col">Imagenes</th>
                        <th class="table__column" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include_once('modelos/conexion.php');
                    $sql = $connect->query("SELECT * FROM books");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr class="table__row">
                            <td data-label="ID" class="table__data"><?= $datos->id_books ?></td>
                            <td data-label="Titulo" class="table__data"><?= $datos->book_name ?></td>
                            <td data-label="Categoria" class="table__data"><?= $datos->book_category ?></td>
                            <td data-label="Precio" class="table__data"><?= $datos->book_price ?></td>
                            <td data-label="Descripcion" class="table__data"><?= $datos->book_description ?></td>
                            <td data-label="Imagenes" class="table__data"><?= $datos->book_img ?></td>
                            <td data-label="Acciones" class="table__data">
                                <a class="table__btn table__btn--yellow" href="modificar_producto.php?id=<?= $datos->id_books ?>" onClick="return confirmar('modificar esta fila??')"><i class="fa-solid fa-pen-to-square">Editar</i></a>
                                <a class="table__btn table__btn--red" onClick="return confirmar('eliminar esta fila?')" href="adminIndex.php?id=<?= $datos->id_books ?>"><i class="fa-solid fa-trash">Eliminar</i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>