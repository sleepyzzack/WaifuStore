<?php

require_once("../modelos/conexion.php");


$nombre = $_POST["buscar"];
$buscador= $connect->query("SELECT * FROM books WHERE book_name LIKE LOWER('%".$nombre."%')"); 
$numero = mysqli_num_rows($buscador); 



//$resultado = mysqli_fetch_assoc($buscador)

?>
<h5 class="card-tittle">Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while($datos = $buscador->fetch_assoc()){ ?>
    <div class="col-md-3">
                  <div class="panel panel-default">
                    
                    <div class="panel-body">
                      <?php
                                              
                          $foto = '../img/' . $datos["book_img"];
                          $tipo = explode(".", $datos["book_img"]);
                          //$tipoStr = $tipo[1];
                          //print_r($datos["book_img"]);
                          

                          if(file_exists($foto) and strtolower(end($tipo)) =="png" or strtolower(end($tipo)) =="jpg"){
                        ?>
                          <img src="img/<?= $datos["book_img"]?>" class="img-responsive">
                      <?php }elseif(file_exists($foto) and strtolower(end($tipo)) =="mp4"){?>
                        
                        <video src="img/<?= $datos["book_img"]; ?>" class="img-responsive" controls></video>
                        
                         <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                      <?php }?>
                    </div>
                    <div class="panel-heading">
                      <h1 class="text-center titulo-pelicula"><?= $datos["book_name"] ?></h1>  
                    </div>
                    
                    <div class="panel-heading">
                      <h1 class="text-center titulo-pelicula">Categoria: <?= $datos["book_category"] ?></h1>  
                    </div>

                    <div class="panel-footer">
                    <span>$<?= $datos["book_price"]; ?></span>
      
                    </div>

                    <div class="panel-footer">
                        <a href="vistas/comprar.php?id=<?= $datos["id_books"] ?>" class="btn btn-success btn-block">
                          <span class="glyphicon glyphicon-shopping-cart">Comprar</span>
                        </a>
                    </div>
                  </div>
              
              
              </div>

<?php } ?>

