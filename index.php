
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>WaifuStore</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="prueba\tienda-online\assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="prueba\tienda-online\assets\css\estilos.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="extras/sendSearch.js"></script>
    <script src="extras/AdminUser.js"></script>
  
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="mb-3">

          <label class="text-white">buscador automatico</label>
          <input onKeyUp="buscar_ahora($('#buscar').val())" type="text" class="form-control" id="buscar" name="buscar">

        </div>
        
        <div class="navbar-header">
          <a class="navbar-brand" onClick="createDiv()">WaifuStore</a>
        </div>

      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div id="pass"></div>
    <div id="datos_buscador" class="container pl-5 pr-5"></div>

    <div class="container" id="main">
        <div class="row">
           
        <?php
                    include_once('modelos/conexion.php');
                    $sql = $connect->query("SELECT * FROM books");
                    while ($datos = $sql->fetch_object()) { ?>
                       <div class="col-md-3">
                  <div class="panel panel-default">
                    
                    <div class="panel-body">
                      <?php
                        
                          $foto = 'img/'.$datos->book_img;
                          $tipo = explode(".", $datos->book_img);
                          if(file_exists($foto) and strtolower(end($tipo)) =="png" or strtolower(end($tipo)) =="jpg"){
                        ?>
                          <img src="<?php print $foto; ?>" class="img-responsive">
                      <?php }elseif(file_exists($foto) and strtolower(end($tipo)) =="mp4"){?>
                        
                        <video src="<?php print $foto; ?>" class="img-responsive" controls></video>
                        
                         <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                      <?php }?>
                    </div>
                    <div class="panel-heading">
                      <h1 class="text-center titulo-pelicula"><?= $datos->book_name ?></h1>  
                    </div>
                    
                    <div class="panel-heading">
                      <h1 class="text-center titulo-pelicula">Categoria: <?= $datos->book_category ?></h1>  
                    </div>

                    <div class="panel-footer">
                    <span>$<?= $datos->book_price; ?></span>
      
                    </div>

                    <div class="panel-footer">
                        <a href="vistas\comprar.php?id=<?= $datos->id_books ?>" class="btn btn-success btn-block">
                          <span class="glyphicon glyphicon-shopping-cart">Comprar</span>
                        </a>
                    </div>
                  </div>
              
              
              </div>
          
            <?php }?>
           

        </div>
      

    </div> <!-- /container -->

   
    
    <script src="prueba\tienda-online\assets\js\jquery.min.js"></script>
    <script src="prueba\tienda-online\assets\js\bootstrap.min.js"></script>

  </body>
</html>
