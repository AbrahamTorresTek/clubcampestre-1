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
                  <a href="marcas_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Editar marcas </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- FORM ---->
<div class=" col-xs-12 col-sm-10 text-left">
<?php $clave = $_GET['cve']; 
$re = mysqli_query($conexion,"SELECT * FROM marcas WHERE id='$clave'");
while($row = mysqli_fetch_assoc($re)) { ?>  

      <form action="marcas_actualiza.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
            <div class="row">


            <div class=" col-xs-6 text-left">
                  <h4 class=" tipo">Nombre</h4> 
                  <input type="text" name="uno" required class="form-control" value="<?php echo $row['uno'];?>" >
            </div>
                              
            <div class="col-xs-3 text-left">
                  <h4 class=" tipo">Activo / Inactivo</h4> 
                  <select name="dos" id="dos" required class="form-control">
                        <option value="<?php echo $row['dos'];?>" selected="selected"><?php echo $row['dos'];?></option>
                        <option value="activo" class="form-control">Activo</option>
                        <option value="inactivo" class="form-control">Inactivo</option>
                  </select>
            </div>

      <div class=" col-xs-10">
      </div>

<!--- NO SE VE 

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Codigo marcas</h4> 
                  <input type="text" name="tres"  class="form-control" value="<?php echo $row['tres'];?>" >
            </div>
                        
            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Modelo</h4> 
                  <input type="text" name="cuatro"  class="form-control" value="<?php echo $row['cuatro'];?>">
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Marca</h4> 
                  <select name="cinco" id="cinco"  class="form-control">
                        <option value="<?php echo $row['cinco'];?>" selected="selected"><?php echo $row['cinco'];?></option>
                        <?php $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE estado='activo'  ORDER BY marca ASC");
                              while($row = mysqli_fetch_assoc($re)) { ?>         
                              <option value="<?php echo $row['marca'];?>" class="form-control"><?php echo $row['marca'];?></option>
                        <? } ?> 
                  </select>
            </div>



      <div class=" col-xs-10">
      </div>



            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Categoria de marcas</h4> 
                  <select name="seis" id="seis" required class="form-control">
                        <?php $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE id='$clave'"); while($row = mysqli_fetch_assoc($re)) { ?>
                        <option value="<?php echo $row['seis'];?>" selected="selected"><?php echo $row['seis'];?></option>
                        <? } ?> 
                        <?php $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE dos='activo' AND cuatro='categoria' ORDER BY uno ASC");
                        while($row = mysqli_fetch_assoc($re)) { ?>         
                                    
                        <option value="<?php echo $row['uno'];?>" class="form-control"><?php echo $row['uno'];?></option>
                        
                        <? } ?> 
                  </select>
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Novedad / Outlet </h4> 
                  <select name="siete" id="siete" required class="form-control">
                        <?php $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE id='$clave'"); while($row = mysqli_fetch_assoc($re)) { ?>
                        <option value="<?php echo $row['siete'];?>" selected="selected"><?php echo $row['siete'];?></option>
                        <? } ?> 
                        <option value="linea" class="form-control">De linea</option>
                        <option value="novedades" class="form-control">Novedades</option>
                        <option value="outlet" class="form-control">Outlet</option>
                  </select>
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Estilo / Coleccion</h4> 
                  <select name="ocho" id="ocho" class="form-control">
                        <?php $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE id='$clave'"); while($row = mysqli_fetch_assoc($re)) { ?>
                        <option value="<?php echo $row['ocho'];?>" selected="selected"><?php echo $row['ocho'];?></option>
                        <? } ?> 
                        <?php $re = mysqli_query($conexion,"SELECT * FROM coleccion WHERE estado='activo' ORDER BY nombre ASC");
                        while($row = mysqli_fetch_assoc($re)) { ?>         
                                    
                              <option value="<?php echo $row['nombre'];?>" class="form-control"><?php echo $row['nombre'];?></option>
                        
                              <? } ?> 
                  </select>
            </div>



      <div class=" col-xs-10">
      </div>

<?php $clave = $_GET['cve']; $re = mysqli_query($conexion,"SELECT * FROM marcas WHERE id='$clave'"); while($row = mysqli_fetch_assoc($re)) { ?>  

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Tamaño </h4> 
                  <input type="text" name="nueve" class="form-control" value="<?php echo $row['nueve'];?>" >
                  
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Piezas x caja  </h4> 
                  <input type="text" name="diez" class="form-control" value="<?php echo $row['diez'];?>" >
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Metros x caja  </h4> 
                  <input type="text" name="once" class="form-control" value="<?php echo $row['once'];?>" >
            </div>



      
      <div class=" col-xs-10">
      </div>



            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Precio </h4> 
                  <input type="text" name="doce" class="form-control" value="<?php echo $row['doce'];?>">
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Precio Mayoreo </h4> 
                  <input type="text" name="trece" class="form-control" value="<?php echo $row['trece'];?>">
            </div>

            <div class=" col-xs-3 text-left">
                  <h4 class=" tipo">Precio Outlet </h4> 
                  <input type="text" name="catorce" class="form-control" value="<?php echo $row['catorce'];?>">
            </div>



      <div class=" col-xs-12">
      </div>



            <div class=" col-xs-2 text-left">
                  <h4 class=" tipo">Quince </h4> 
                  <input type="text" name="quince" class="form-control" value="<?php echo $row['quince'];?>">
            </div>
            <div class=" col-xs-2 text-left">
                  <h4 class=" tipo">Dieciseis </h4> 
                  <input type="text" name="dieciseis" class="form-control" value="<?php echo $row['dieciseis'];?>" >
            </div>
            <div class=" col-xs-2 text-left">
                  <h4 class=" tipo">Diecisiete </h4> 
                  <input type="text" name="diecisiete" class="form-control" value="<?php echo $row['diecisiete'];?>" >
            </div>
            <div class=" col-xs-2 text-left">
                  <h4 class=" tipo">Dieciocho </h4> 
                  <input type="text" name="dieciocho" class="form-control" value="<?php echo $row['dieciocho'];?>" >
            </div>
      
            <div class=" col-xs-9 text-left">
                  <h4 class=" tipo">Descripcion</h4> 
                  <textarea type="text" name="descripcion" required class="form-control" rows="5"><?php $des = str_replace("</br>","",$row['descripcion']); $des2 = str_replace("<br />","",$des); echo $des2; ?> </textarea>
            </div>
NO SE VE ---->
            <div class=" col-xs-3">                        
                  <input type="text" name="funo"  class="invisible" value="<?php echo $row['f1'];?>" >
                  <input type="text" name="fdos"  class="invisible"  value="<?php echo $row['f2'];?>" >
                  <input type="text" name="ftres"  class="invisible" value="<?php echo $row['f3'];?>" >
            </div>
<? } ?>

            <div class=" col-xs-12">
            </div>

            <div class=" col-xs-3 text-left">
                  <p><br/></p>
                  <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Actualizar contenido</button>
                  <p><br/></p>
            </div> 
    
            
<? } ?>     
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