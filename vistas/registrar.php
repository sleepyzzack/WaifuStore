
<div class="form-container element-center">
                <form class="form element-center" method="POST" enctype="multipart/form-data">
                    <h3 class="form__title">Registro de Libros</h3>
                    <?php
                    include('../modelos/conexion.php');
                    include('../controladores/registros.php');
                    
                    $reg = new regis();
                    $sql = $reg->add($connect);

                    ?>
                    <div class="form__input-container">
                        <label class="form__input-title" for="titulo">Titulo</label>
                        <input class="form__input" type="text" name="titulo" id="titulo" autocomplete="off">
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="categoria">Categoria</label>
                        <select class="form__input" name="categoria" id="categoria">
                            <option disabled selected>Seleccione una categoria</option>
                            <option value="Accion">Accion</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Manga">Manga</option>
                            <option value="Novela">Novela</option>
                            <option value="Horror">Horror</option>
                            <option value="Ciencia Ficcion">Ciencia Ficcion</option>
                        </select>
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="precio">Precio</label>
                        <input class="form__input" type="text" name="precio" id="precio" autocomplete="off">
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="descripcion">Descripcion</label>
                        <textarea class="form__textarea" name="descripcion" id="descripcion" autocomplete="off"></textarea>
                    </div>
                    <div class="form__input-container">
                        <label class="form__input-title" for="foto">Imagen</label>
                        <input class="form__input" name="foto" id="foto" type="file">
                    </div>
                    <button class="form__btn" type="submit" name="btnregistrar" value="registrar">Registrar</button>
                </form>
            </div>