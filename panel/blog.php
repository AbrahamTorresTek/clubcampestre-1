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
                  <a href="blog_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Agregar</h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- FORM ---->
            <div class=" col-xs-12 col-sm-12 text-left">
                  <form action="blog_valida.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                              <div class=" col-xs-12 col-sm-6 text-left">
                                    <h4 class=" tipo">Nombre de Seccion</h4> 
                                    <input type="text" name="uno" required class="form-control" >
                              </div>
                              <div class="col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Sociales</h4> 
                                    <select name="nueve" id="nueve" required class="form-control">
                                          <option value="promociones" class="form-control">promociones</option>
                                          <option value="orgullo" class="form-control">orgullo</option>
                                          <option value="" selected="selected" class="form-control">-</option>
                                    </select>
                              </div>
                              <div class="col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Idioma</h4> 
                                    <select name="doce" id="doce" required class="form-control">
                                          <option value="espanol" class="form-control">español</option>
                                          <option value="ingles" class="form-control">ingles</option>
                                          <option value="" class="form-control">-</option>
                                    </select>
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Activo / inactivo</h4> 
                                    <select name="dos" id="dos" required class="form-control">
                                          <option value="activo" selected="selected">Activo</option>
                                          <option value="inactivo" class="form-control">inactivo</option>
                                    </select>
                              </div>

                        <div class=" col-xs-12"></div>

                              <div class=" col-xs-6 text-left">
                                    <h4 class=" tipo">Titulo Interior Seccion</h4> 
                                    <input type="text" name="siete" required class="form-control" >
                              </div>
                              <div class=" col-xs-6 text-left">
                                    <h4 class=" tipo">Subtitulo</h4> 
                                    <input type="text" name="ocho" class="form-control" >
                              </div>


                        <div class=" col-xs-12"></div>
                        
                              <div class=" col-xs-6 text-left">
                              <h4 class=" tipo">Seo </h4> 
                                    <input type="text" name="dieciocho" class="form-control" >
                              </div>
                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo"> Tipo </h4> 
                                    <select name="tres" id="tres" required class="form-control">
                                          <option value="normal" class="form-control"> normal</option>
                                          <option value="destacado" class="form-control"> destacado</option>
                                    </select>
                              </div>
                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo"> Seccion </h4> 
                                    <select name="cuatro" id="cuatro" required class="form-control">
                                          <?php $rese = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos='activo'  ORDER BY uno ASC");
                                          while($rowse = mysqli_fetch_assoc($rese)) { ?>         
                                                <option value="<?php echo $rowse['dieciocho'];?>" class="form-control"><?php echo $rowse['dieciocho'];?></option>
                                          <? } ?>

                                    </select>
                              </div>

                        <div class=" col-xs-12"></div>

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Descripcion</h4>                         
                                    <textarea type="text" name="descripcion" class="form-control" rows="10"></textarea>
                              </div>

                        <div class=" col-xs-12"></div>
                        
                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen</h4> 
                                    <input type="file" name="imagen" class="form-control" >
                                    <small class="tipo">* Recomendable 800 x 600 - 72 DPI</small>
                              </div>

                              <div class=" col-xs-12 text-left">
                                    <p></p>
                                    <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Guardar blog</button>
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