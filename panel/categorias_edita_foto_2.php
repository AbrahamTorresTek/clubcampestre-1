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
                  <h4 class="tipo color"> Editar Imagen categorias </h4>
                </div>

                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->

            <!----- FORM ---->
                <div class=" col-xs-12 col-sm-10 text-left">
                <?php $clave = $_GET['cve']; $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE id='$clave'"); while($row = mysqli_fetch_assoc($re)) { ?>  
                <form action="categorias_actualiza_foto_2.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

                        <div class=" col-xs-10 text-left">
                            <input type="file" name="imagen" required class="form-control" >
                            <h4 class="tipo">Selecciona Imagen</h4> 
                        </div>

                        <div class=" col-xs-10 text-left">
                            <input type="text" name="nombre" class="invisible"  value="<?php echo $row['uno'];?>" >  
                        </div>

                        <div class=" col-xs-10 text-left">
                            <button type="submit" class="btn btn-default" value="Enviar"> Guardar Imagen</button>
                            <p><br/></p>
                        </div>      
                
                </form> 
                <? } ?>                
                </div>
            <!----- FORM ---->    
    </div>
  
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>