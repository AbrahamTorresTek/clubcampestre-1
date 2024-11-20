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
                  <a href="productos_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Alta nuevo producto </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- FORM ---->
                  <div class=" col-xs-12 col-sm-12 text-left">
                  <form action="productos_valida.php" method="POST" enctype="multipart/form-data">
                        <div class="row">


                              <div class=" col-xs-8 text-left">
                                    <h4 class=" tipo">Nombre</h4> 
                                    <input type="text" name="uno" required class="form-control" >
                              </div>
                        
                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Activo / inactivo</h4> 
                                    <select name="dos" id="dos" required class="form-control">
                                          <option value="activo" selected="selected">Activo</option>
                                          <option value="inactivo" class="form-control">Inactivo</option>
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>



                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Codigo
                                    <small class="tipo">*Vincula variantes Tamaño</small>
                                    </h4>
                                    <input type="text" name="tres"  class="form-control" >
                              </div>
                        
                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Modelo 
                                    <small class="tipo">*Vincula variantes color</small>
                                    </h4>
                                    <input type="text" name="cuatro"  class="form-control" >
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Marca
                                    <small class="tipo">Se pueden editar</small>
                                    </h4>
                                    <select name="cinco" id="cinco"  class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE dos='activo'  ORDER BY uno ASC");
                                                while($row = mysqli_fetch_assoc($re)) { ?>         
                                                <option value="<?php echo $row['uno'];?>" class="form-control"><?php echo $row['uno'];?></option>
                                          <? } ?> 
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>



                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Elegir Categoria</h4> 
                                    <select name="seis" id="seis" required class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE dos='activo' AND diez='secundario' ORDER BY cuatro ASC");
                                          while($row = mysqli_fetch_assoc($re)) { ?>                    
                                                <option value="<?php echo $row['dieciocho'];?>" class="form-control"> <?php echo $row['uno'];?> </option>
                                          <? } ?> 
                                    </select>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Tipo</h4> 
                                    <select name="siete" id="siete" required class="form-control">
                                    <option value="linea" class="form-control">De linea</option>
                                    <option value="novedades" class="form-control">Novedades</option>
                                    <option value="promocion" class="form-control">Promocion</option>
                                    </select>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Estilo / Coleccion
                                    <small class="tipo">Se pueden editar</small>
                                    </h4>
                                    <select name="ocho" id="ocho" class="form-control">
                                          <?php $re = mysqli_query($conexion,"SELECT * FROM estilos WHERE dos='activo' ORDER BY uno ASC");
                                                while($row = mysqli_fetch_assoc($re)) { ?>         
                                                      
                                                <option value="<?php echo $row['id'];?>" class="form-control"><?php echo $row['uno'];?></option>
                                          <? } ?> 
                                    </select>
                              </div>



                        <div class=" col-xs-10">
                        </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Precio 
                                    <small class="tipo">Agregar solo numeros</small> 
                                    </h4>
                                    <input type="text" name="doce" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Existencias Inventario </h4> 
                                    <small class="tipo"></small>
                                    <input type="text" name="trece" class="form-control" value="10" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Minimo de Venta </h4> 
                                    <input type="text" name="catorce" class="form-control" value="1" >
                              </div>


                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Tamaño 
                                    <small class="tipo">Agrega el primero</small>
                                    </h4>
                                    <input type="text" name="diez" class="form-control" >
                              </div>

                        <div class=" col-xs-12">
                        </div>

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Link Video You Tube</h4>                         
                                    <textarea type="text" name="dieciocho" class="form-control" rows="2"></textarea>
                              </div>

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Descripción</h4>                         
                                    <textarea type="text" name="descripcion" requireddd class="form-control" rows="10"></textarea>
                              </div>


                        <div class=" col-xs-10">
                        </div>
                        
                        

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen</h4> 
                                    <input type="file" name="imagen" required class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen 2</h4> 
                                    <input type="file" name="imagen2" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen 3</h4> 
                                    <input type="file" name="imagen3" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona Imagen 4</h4> 
                                    <input type="file" name="imagen4" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona PDF PUBLICO</h4> 
                                    <input type="file" name="pdf" class="form-control" >
                              </div>

                              <div class=" col-xs-3 text-left">
                                    <h4 class=" tipo">Selecciona PDF EMPRESAS</h4> 
                                    <input type="file" name="pdfdos" class="form-control" >
                              </div>

                        <div class=" col-xs-10">
                        </div>



                        <div class=" col-xs-4 text-left">
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