<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaifuStore</title>
    <link rel="stylesheet" href="./vistas/assets/css/normalize.css">
    <link rel="stylesheet" href="./vistas/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/06e9d41eed.js" crossorigin="anonymous"></script>
    <script src="extras\pop.js" crossorigin="juanito"></script>
    <script src="extras/confirmar.js"></script>
</head>
<body class="element-center">
    <main class="main element-center">
        <h1 class="main__title">WaifuStore</h1>
        <div class="content-container">
            <div class="form-container element-center">
                <form class="form element-center" method="POST">
                    <h3 class="form__title">Registro de Libros</h3>
                    <?php
                    include("modelos/conexion.php");
                    include("controladores/registros.php");
                    include("controladores/eliminar.php");

                    $reg = new regis();
                    $reg->add($connect);
                    ?>
                    <div class="form__input-container">
                        <label class="form__input-title" for="titulo">Titulo</label>
                        <input class="form__input" type="text" name="titulo" id="titulo" autocomplete="off">
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="categoria">Categoria</label>
                        <input class="form__input" type="text" name="categoria" id="categoria" autocomplete="off">
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="precio">Precio</label>
                        <input class="form__input" type="text" name="precio" id="precio" autocomplete="off">
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="descripcion">Descripcion</label>
                        <textarea class="form__textarea" name="descripcion" id="descripcion" autocomplete="off"></textarea>
                    </div>
                    <button class="form__btn" type="submit" name="btnregistrar" value="registrar">Registrar</button>
                </form>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead class="table__header">
                        <tr>
                            <th class="table__column" scope="col">ID</th>
                            <th class="table__column" scope="col">Titulo</th>
                            <th class="table__column" scope="col">Categoria</th>
                            <th class="table__column" scope="col">Precio</th>
                            <th class="table__column" scope="col">Descripcion</th>
                            <th class="table__column" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('modelos/conexion.php');
                        $sql = $connect->query("SELECT * FROM books");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr class="table__row">
                                <td class="table__data"><?= $datos->id_books ?></td>
                                <td class="table__data"><?= $datos->book_name ?></td>
                                <td class="table__data"><?= $datos->book_category ?></td>
                                <td class="table__data"><?= $datos->book_price ?></td>
                                <td class="table__data"><?= $datos->book_description ?></td>
                                <td class="table__data">
                                    <a class="table__btn table__btn--yellow" href="modificar_producto.php?id=<?= $datos->id_books ?>" onClick="return confirmar('modificar esta fila??')" ><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="table__btn table__btn--red" onClick="return confirmar('eliminar esta fila?')" href="index.php?id=<?= $datos->id_books ?>" ><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
</body>

</html>
