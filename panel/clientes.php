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
                  <a href="clientess_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Alta nueva clientes </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- FORM ---->
                  <div class=" col-xs-12 col-sm-10 text-left">
                  <form action="clientes_valida.php" method="POST" enctype="multipart/form-data">
                        <div class="row">


                              <div class=" col-xs-6 text-left">
                                    <h4 class=" tipo">Nombre</h4> 
                                    <input type="text" name="uno" required class="form-control" >
                              </div>
                        
                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Activo / Inactivo</h4> 
                                    <select name="dos" id="dos" required class="form-control">
                                          <option value="activo" selected="selected">Activo</option>
                                          <option value="inactivo" class="form-control">Inactivo</option>
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>

<!--- NO SE VE 

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Codigo clientes</h4> 
                                    <input type="text" name="tres"  class="form-control" >
                              </div>
                        
                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Modelo</h4> 
                                    <input type="text" name="cuatro"  class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Marca</h4> 
                                    <select name="cinco" id="cinco"  class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM clientes WHERE estado='activo'  ORDER BY marca ASC");
                                                while($row = mysqli_fetch_assoc($re)) { ?>         
                                                <option value="<?php echo $row['marca'];?>" class="form-control"><?php echo $row['marca'];?></option>
                                          <? } ?> 
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>



                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Categoria de clientes</h4> 
                                    <select name="seis" id="seis" required class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE dos='activo' AND cuatro='categoria' ORDER BY uno ASC");
                                                while($row = mysqli_fetch_assoc($re)) { ?>         
                                                      
                                                <option value="<?php echo $row['uno'];?>" class="form-control"><?php echo $row['uno'];?></option>
                                          <? } ?> 
                                    </select>
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Novedad / Outlet </h4> 
                                    <select name="siete" id="siete" required class="form-control">
                                          <option value="linea" selected="selected">De linea</option>
                                          <option value="novedades" class="form-control">Novedades</option>
                                          <option value="outlet" class="form-control">Outlet</option>
                                    </select>
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Estilo / Coleccion</h4> 
                                    <select name="ocho" id="ocho" class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM coleccion WHERE estado='activo' ORDER BY nombre ASC");
                                                while($row = mysqli_fetch_assoc($re)) { ?>         
                                                      
                                                <option value="<?php echo $row['nombre'];?>" class="form-control"><?php echo $row['nombre'];?></option>
                                          <? } ?> 
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>



                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Tamaño </h4> 
                                    <input type="text" name="nueve" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Piezas x caja  </h4> 
                                    <input type="text" name="diez" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Metros x caja  </h4> 
                                    <input type="text" name="once" class="form-control" >
                              </div>



                        <div class=" col-xs-10">
                        </div>



                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Precio </h4> 
                                    <input type="text" name="doce" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Precio Mayoreo </h4> 
                                    <input type="text" name="trece" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Precio Outlet </h4> 
                                    <input type="text" name="catorce" class="form-control" >
                              </div>



                        <div class=" col-xs-12">
                        </div>

                              <div class=" col-xs-2 text-left">
                                    <h4 class=" tipo">Quince </h4> 
                                    <input type="text" name="quince" class="form-control" >
                              </div>
                              <div class=" col-xs-2 text-left">
                                    <h4 class=" tipo">Dieciseis </h4> 
                                    <input type="text" name="dieciseis" class="form-control" >
                              </div>
                              <div class=" col-xs-2 text-left">
                                    <h4 class=" tipo">Diecisiete </h4> 
                                    <input type="text" name="diecisiete" class="form-control" >
                              </div>
                              <div class=" col-xs-2 text-left">
                                    <h4 class=" tipo">Dieciocho </h4> 
                                    <input type="text" name="dieciocho" class="form-control" >
                              </div>


                              <div class=" col-xs-9 text-left">
                                    <h4 class=" tipo">Descripcion</h4>                         
                                    <textarea type="text" name="descripcion" required class="form-control" rows="5"></textarea>
                              </div>
NO SE VE ---->
                        <div class=" col-xs-10">
                        </div>
                        
                        

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen</h4> 
                                    <input type="file" name="imagen" required class="form-control" >
                              </div>
<!--- NO SE VE 
                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen 2</h4> 
                                    <input type="file" name="imagen2" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen 3</h4> 
                                    <input type="file" name="imagen3" class="form-control" >
                              </div>
 NO SE VE ---->


                        <div class=" col-xs-10">
                        </div>



                        <div class=" col-xs-3 text-left">
                              <p><br/></p>
                              <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Guardar contenido</button>
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