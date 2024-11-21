<?php include("cabezera.php"); ?>

<body>

      <div class="wrapper">
            <!-- LATERAL -->
            <?php include("admin.php"); ?>
            <!-- LATERAL -->



            <!-- CONTENIDO -->
            <div id="content">

                  <!-- BOTON CERRAR -->
                  <div class="row">

                        <div class=" col-xs-12 col-sm-1 text-left">
                              <button type="button" id="sidebarCollapse" class="btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                              </button>
                        </div>

                        <div class=" col-xs-12 col-sm-4 text-left">
                              <h4 class="tipo color"> OCULTAR MENU LATERAL</h4>
                        </div>

                        <div class=" col-xs-12 ">
                              <hr>
                        </div>

                        <div class=" col-xs-12 col-sm-3 text-left">
                              <a href="categorias_todos.php">
                                    <button class="btn btn-block btn-warning"> Regresar </button>
                              </a>
                        </div>

                        <div class=" col-xs-12 col-sm-4 text-left">
                              <h4 class="tipo color"> Editar producto </h4>
                        </div>


                        <div class=" col-xs-12 ">
                              <br>
                        </div>

                  </div>
                  <!-- BOTON CERRAR -->


                  <!----- FORM ---->
                  <div class=" col-xs-12 col-sm-12 text-left">
                        <?php $clave = $_GET['cve'];
                        $re = mysqli_query($conexion, "SELECT * FROM categorias WHERE id='$clave'");
                        while ($row = mysqli_fetch_assoc($re)) { ?>

                              <form action="categorias_actualiza.php?cve2=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">


                                          <div class=" col-xs-12 col-sm-4 text-left">
                                                <h4 class=" tipo">Nombre Seccion</h4>
                                                <input type="text" name="uno" required class="form-control" value="<?php echo $row['uno']; ?>">
                                          </div>

                                          <div class="col-xs-12 col-sm-2 text-left">
                                                <h4 class=" tipo">Activo / Inactivo</h4>
                                                <select name="dos" id="dos" required class="form-control">
                                                      <option value="<?php echo $row['dos']; ?>" selected="selected"><?php echo $row['dos']; ?></option>
                                                      <option value="activo" class="form-control">Activo</option>
                                                      <option value="inactivo" class="form-control">Inactivo</option>
                                                </select>
                                          </div>

                                          <div class="col-xs-12 col-sm-2 text-left">
                                                <h4 class=" tipo">Visible en Inicio</h4>
                                                <select name="tres" id="tres" required class="form-control">
                                                      <option value="<?php echo $row['tres']; ?>" selected="selected"><?php echo $row['tres']; ?></option>
                                                      <option value="si" class="form-control">Si</option>
                                                      <option value="no" class="form-control">No (solo menu)</option>
                                                </select>
                                          </div>
                                          <div class=" col-xs-12 col-sm-2 text-left">
                                                <h4 class=" tipo">Ancho</h4>
                                                <input type="text" name="nueve" place-holder="1 minimo - 12 maximo" required class="form-control" value="<?php echo $row['nueve']; ?>">
                                          </div>
                                          <div class=" col-xs-12 col-sm-2 text-left">
                                                <h4 class=" tipo">Alto en px</h4> 
                                                <input type="text" place-holder="" name="once" required class="form-control" value="<?php echo $row['once']; ?>" >
                                          </div>


                                          <div class=" col-xs-12">
                                          </div>

                                          <div class=" col-xs-12 col-sm-6 text-left">
                                                <h4 class=" tipo">Titulo Interior Seccion</h4>
                                                <input type="text" name="siete" class="form-control" value="<?php echo $row['siete']; ?>">
                                          </div>

                                          <div class=" col-xs-12 col-sm-6 text-left">
                                                <h4 class=" tipo">Subtitulo</h4>
                                                <input type="text" name="ocho" class="form-control" value="<?php echo $row['ocho']; ?>">
                                          </div>

                                          <div class=" col-xs-12">
                                          </div>

                                          <div class=" col-xs-12 col-sm-3 text-left">
                                                <h4 class=" tipo"> Lugar en el Menu </h4>
                                                <select name="cuatro" id="cuatro" required class="form-control">
                                                      <option value="<?php echo $row['cuatro']; ?>" selected="selected"><?php echo $row['cuatro']; ?></option>
                                                      
                                                      <option value="menu_derecho" class="form-control"> Menu Derecho</option>
                                                      <option value="menu_izquierdo" class="form-control"> Menu Izquierdo</option>
                                                      <hr>Categoria Secundaria<hr>
                                                      <?php $clave = $_GET['cve'];
                                                      $recat = mysqli_query($conexion, "SELECT * FROM categorias WHERE diez='principal'");
                                                      while ($rowcat = mysqli_fetch_assoc($recat)) { ?>
                                                      <option value="<?php echo $rowcat['dieciocho']; ?>" class="form-control"> <?php echo $rowcat['uno']; ?> </option>
                                                      <?php } ?>
                                                </select>
                                          </div>
                                          <div class=" col-xs-12 col-sm-3 text-left">
                                                <h4 class=" tipo"> Tipo de Categoria </h4>
                                                <select name="diez" id="diez" required class="form-control">
                                                      <option value="<?php echo $row['diez']; ?>" selected="selected"><?php echo $row['diez']; ?></option>
                                                      <option value="principal" class="form-control"> Principal </option>
                                                      <option value="secundario" class="form-control"> Secundario</option>
                                                </select>
                                          </div>
                                          <div class=" col-xs-12 col-sm-6 text-left">
                                                <h4 class=" tipo">Seo </h4>
                                                <input type="text" name="dieciocho" class="form-control" value="<?php echo $row['dieciocho']; ?>">
                                          </div>

                                          <div class=" col-xs-12">
                                          </div>

                                          <div class=" col-xs-12 text-left">
                                                <h4 class=" tipo">Descripcion</h4>
                                                <textarea type="text" name="descripcion" class="form-control" rows="10"><?php $des = str_replace("</br>", "", $row['descripcion']);
                                                                                                                        $des2 = str_replace("<br />", "", $des);
                                                                                                                        echo $des2; ?> </textarea>
                                          </div>

                                          <div class=" col-xs-12 text-left">
                                                <h4 class=" tipo">Complementos</h4>
                                                <textarea type="text" name="diecisiete" class="form-control" rows="5"><?php $des3 = str_replace("</br>", "", $row['diecisiete']);
                                                                                                                        $des31 = str_replace("<br />", "", $des3);
                                                                                                                        echo $des31; ?> </textarea>
                                          </div>

                                          <div class=" col-xs-4">
                                                <input type="text" name="funo" class="invisible" value="<?php echo $row['f1']; ?>">
                                          </div>
                                          <div class=" col-xs-4">
                                                <input type="text" name="fdos" class="invisible" value="<?php echo $row['f2']; ?>">
                                          </div>
                                          <div class=" col-xs-4">
                                                <input type="text" name="ftres" class="invisible" value="<?php echo $row['f3']; ?>">
                                          </div>

                                          <div class=" col-xs-12 col-sm-3 text-left">
                                                <p><br /></p>
                                                <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Actualizar contenido</button>
                                                <p><br /></p>
                                          </div>


                                    <?php } ?>
                                    </div>
                  </div>
                  </form>
                  <!----- CONTENIDO ---->


            </div>
            <!-- CONTENIDO -->
      </div>

      <!-- FOOTER -->
      <?php include("footer.php") ?>
      <!-- FOOTER -->

</body>

</html>