<?php
?>

<DOCTYPE html>
<html lang="en">
    <head>
        <meta chasrset="UTF-8">
        <meta http-equiv="X-UX-Compatible" content="IE=edge">
        <meta name="viewimport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h5 class="text-center alert alert-secondary">Modificar</h5>

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
</body>
</html>
