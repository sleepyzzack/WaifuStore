<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaifuStore</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./vistas/assets/css/block/textarea.css">
    <script src="https://kit.fontawesome.com/06e9d41eed.js" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center p-3 m-0 fw-bold">WaifuStore</h1>
    <div class="container-fluid px-5 row mb-2">
        <form class="col-4">
            <h3 class="text-left py-3 text-primary fw-bold m-0">Registro de Libros</h3>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea class="form-control input__text-area" name="descripcion" id="descripcion"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="registrar">Registrar</button>
        </form>
        <div class="col-8 p-4 table-responsive">
            <table class="table table-borderless table-sm">
                <thead>
                    <tr class="bg-info ">
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                
                <?php
            
                include_once('modelos/conexion.php');
                $sql = $connect->query("SELECT * FROM books");
                while($datos=$sql->fetch_object()){?>
                    <tr>
                        <td class="fw-bold" ><?= $datos->id_books?></td>
                        <td><?= $datos->book_name ?></td>
                        <td><?= $datos->book_category ?></td>
                        <td><?= $datos->book_price ?></td>
                        <td><?= $datos->book_description ?></td>
                        <td class="d-flex gap-4">
                            <a href ="modificar_producto.php?id=<?= $datos-> id_books ?>" class="btn btn-small btn-warning" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-small btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>

                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
