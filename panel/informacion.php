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
                              <h4 class="tipo color"> OCULTAR MENU</h4>
                        </div>

                        <div class=" col-xs-12 ">
                              <hr>
                        </div>

                        <div class=" col-xs-12 col-sm-3 text-left">
                              <a href="menu_alta_dise.php">
                                    <button class="btn btn-block btn-warning"> Regresar Home</button>
                              </a>
                        </div>

                        <div class=" col-xs-12 col-sm-4 text-left">
                              <h4 class="tipo color"> Información General</h4>
                        </div>


                        <div class=" col-xs-12 ">
                              <hr>
                        </div>

                  </div>
                  <!-- BOTON CERRAR -->


                  <!----- CONTENIDO ---->

                  <?php
                  $clave = $_GET['cve'];
                  $re = mysqli_query($conexion, "SELECT * FROM informacion WHERE id='$clave'");
                  while ($row = mysqli_fetch_assoc($re)) { ?>

                        <div class="row">
                              <form action="info_actualiza.php?cve2=<?php echo $row['id']; ?>" method="post"
                                    enctype="multipart/form-data">

                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Tipo:</h4>
                                          <select name="tipo" id="tipo" required class="form-control">
                                                <option value="<?php echo $row['tipo']; ?>" selected="selected">
                                                      <?php echo $row['tipo']; ?>
                                                </option>
                                                <option value="principal" class="form-control">principal</option>
                                                <option value="sucursales" class="form-control">sucursales</option>
                                          </select>
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Telefono:</h4>
                                          <input type="text" name="telefono" required class="form-control"
                                                value="<?php echo $row['telefono']; ?>">
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Telefonos:</h4>
                                          <textarea type="text" name="telefonos" required class="form-control" rows="2"><?php $des = str_replace("</br>", "", $row['telefonos']);
                                          $des2 = str_replace("<br />", "", $des);
                                          echo $des2; ?> </textarea>
                                    </div>

                                    <div class=" col-xs-12 "></div>

                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">WhatsApp</h4>
                                          <input type="text" name="whatsapp" required class="form-control"
                                                value="<?php echo $row['whatsapp']; ?>">
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">WhatsApp Link</h4>
                                          <input type="text" name="link_whatsapp" required class="form-control"
                                                value="<?php echo $row['link_whatsapp']; ?>">
                                          *Deben de ir los 10 caracteres sin espacios
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">WhatsApps:</h4>
                                          <textarea type="text" name="whatsapps" class="form-control" rows="2"><?php $des = str_replace("</br>", "", $row['whatsapps']);
                                          $des2 = str_replace("<br />", "", $des);
                                          echo $des2; ?> </textarea>
                                    </div>

                                    <div class=" col-xs-12 "></div>

                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Email</h4>
                                          <input type="text" name="email" required class="form-control"
                                                value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Email de envio formulario:</h4>
                                          <input type="text" name="email2" class="form-control"
                                                value="<?php echo $row['email2']; ?>">
                                    </div>
                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Emails:</h4>
                                          <textarea type="text" name="correos" class="form-control" rows="2"><?php $des = str_replace("</br>", "", $row['correos']);
                                          $des2 = str_replace("<br />", "", $des);
                                          echo $des2; ?> </textarea>
                                    </div>

                                    <div class=" col-xs-12 "> </div>

                                    <div class=" col-xs-12 col-sm-3 text-left">
                                          <h4 class=" tipo">Dirección</h4>
                                          <textarea type="text" name="direccion" required class="form-control" rows="6"><?php $des = str_replace("</br>", "", $row['direccion']);
                                          $des2 = str_replace("<br />", "", $des);
                                          echo $des2; ?> </textarea>
                                    </div>
                                    <div class=" col-xs-12 col-sm-3 text-left">
                                          <h4 class=" tipo">Horario</h4>
                                          <textarea type="text" name="horario" required class="form-control" rows="6"><?php $des = str_replace("</br>", "", $row['horario']);
                                          $des3 = str_replace("<br />", "", $des);
                                          echo $des3; ?> </textarea>
                                    </div>

                                    <div class=" col-xs-12 col-sm-6 text-left">
                                          <h4 class=" tipo">Mapa</h4>
                                          <textarea type="text" name="mapa" required class="form-control"
                                                rows="6"><?php echo $row['mapa']; ?></textarea>
                                    </div>

                                    <div class=" col-xs-12 text-left">
                                          <p></p>
                                          <hr>
                                          <h4 class=" tipo">Datos Aviso Privacidad </h4>
                                    </div>

                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Pagina Web</h4>
                                          <input type="text" name="web" class="form-control"
                                                value="<?php echo $row['web']; ?>">
                                    </div>

                                    <div class=" col-xs-12 col-sm-4 text-left">
                                          <h4 class=" tipo">Nombre Comercial</h4>
                                          <input type="text" name="nombre" class="form-control"
                                                value="<?php echo $row['nombre']; ?>">
                                    </div>



                                    <div class=" col-xs-12 text-left">
                                          <p></p>
                                    </div>

                                    <div class=" col-xs-12 col-sm-6 col-lg-6 col-md-6 text-left">
                                          <h4 class=" tipo">Aviso de privacidad</h4>
                                          <textarea rows="6" type="text" name="avisoprivacidad" class="form-control">
                                            <?php echo $row['avisoprivacidad']; ?>
                                          </textarea>
                                    </div>

                                    <div class=" col-xs-12 col-sm-12 text-left">
                                          <p></p>
                                          <button type="submit" class="btn btn-default btn-block btn-warning" value="Enviar">
                                                Guardar</button>
                                          <p><br /></p>
                                    </div>


                              </form>
                        </div>
                  <?php } ?>
                  <!----- CONTENIDO ---->





            </div>
            <!-- CONTENIDO -->

            <?php include("footer.php") ?>

</body>

</html>