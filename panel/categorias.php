<?php include("cabezera.php");?>

<body>

<div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
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
                  <h4 class="tipo color"> Alta nuevo categorias </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- FORM ---->
                  <div class=" col-xs-12 col-sm-12 text-left">
                  <form action="categorias_valida.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                              <div class=" col-xs-12 col-sm-4 text-left">
                                    <h4 class=" tipo">Nombre de Seccion</h4> 
                                    <input type="text" name="uno" required class="form-control" >
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Estado</h4> 
                                    <select name="dos" id="dos" required class="form-control">
                                          <option value="activo" selected="selected">Activo</option>
                                          <option value="inactivo" class="form-control">inactivo</option>
                                    </select>
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Visible en Inicio </h4> 
                                    <select name="tres" id="tres" required class="form-control">
                                          <option value="si" selected="selected">Si</option>
                                          <option value="no" class="form-control">No (solo menu)</option>
                                    </select>
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Ancho </h4> 
                                    <input type="text" place-holder="1 minimo - 12 maximo" name="nueve" required class="form-control" >
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Alto en px</h4> 
                                    <input type="text" name="once" required class="form-control" >
                              </div>



                        <div class=" col-xs-12">
                        </div>



                        <div class=" col-xs-6 text-left">
                                    <h4 class=" tipo">Titulo Interior Seccion</h4> 
                                    <input type="text" name="siete" class="form-control" >
                              </div>


                              <div class=" col-xs-6 text-left">
                                    <h4 class=" tipo">Subtitulo</h4> 
                                    <input type="text" name="ocho" class="form-control" >
                              </div>


                        <div class=" col-xs-12">
                        </div>
                        

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo"> Lugar en el Menu </h4> 
                                    <select name="cuatro" id="cuatro" required class="form-control">
                                          <option value="desplegable" class="form-control"> Desplegable</option>
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

                              <div class=" col-xs-6 text-left">
                              <h4 class=" tipo">Seo </h4> 
                                    <input type="text" name="dieciocho" class="form-control" >
                              </div>


                              
                              <div class=" col-xs-12">
                              </div>

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Descripcion</h4>                         
                                    <textarea type="text" name="descripcion" class="form-control" rows="10"></textarea>
                              </div>

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Complementos</h4>                         
                                    <textarea type="text" name="diecisiete" class="form-control" rows="5"></textarea>
                                    <small class="tipo">* Esta area cubre toda la pagina y acepta codigo</small>
                              </div>


                        <div class=" col-xs-10">
                        </div>
                        
                        

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen Portada <small class="tipo">* Solo si es visible en Index</small></h4> 
                                    <input type="file" name="imagen" class="form-control" >
                                    <small class="tipo">* Recomendable 400 x 300 - 72 DPI</small>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen Interior</h4> 
                                    <input type="file" name="imagen2" class="form-control" >
                                    <small class="tipo">* Recomendable 400 x 600 - 72 DPI</small>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen Fondo</h4> 
                                    <input type="file" name="imagen3" class="form-control" >
                                    <small class="tipo">* Recomendable 1500 x 500 - 72 DPI</small>
                              </div>



                        <div class=" col-xs-12">
                        </div>



                        <div class=" col-xs-3 text-left">
                              <p><br/></p>
                              <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Guardar categorias</button>
                              <p><br/></p>
                        </div> 

                  </div>             
                  </form>        
            <!----- FORM ---->

      </div>  
      <!-- CONTENIDO -->
</div>

<!-- FOOTER -->
<?php include("footer.php") ?>
<!-- FOOTER -->

</body>
</html>