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
                  <h4 class="tipo color"> Redes Sociales </h4>
                  </div>


                  <div class=" col-xs-12 ">
                  <hr>
                  </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
<div class="row">

    <?php $re = mysqli_query($conexion,"SELECT * FROM redes ORDER BY Id ");
    while($row= mysqli_fetch_assoc($re)) { ?> 
    <form action="redes_actualiza.php?cve2=<?php echo $row['Id'];?>" method="post" enctype="multipart/form-data">

        <div class=" col-xs-3 text-left">
          <h4 class=" tipo"><?php echo $row['Red'];?></h4> 
        </div>

        <div class=" col-xs-1 text-right">
          <p class=" tipo">Link</p>
        </div>
        <div class=" col-xs-3 text-left">
          <input type="text" name="link" class="form-control" value="<?php echo $row['Link'];?>">
        </div>
            
        <div class=" col-xs-1 text-right">
          <p class=" tipo">Estado</p> 
        </div>
        <div class=" col-xs-2 text-left">
          <select name="estado" id="estado"  class="form-control">
          <option value="<?php echo $row['Estado'];?>" selected="<?php echo $row['Estado'];?>"><?php echo $row['Estado'];?></option>
                <option value="activo" class="form-control">Activo</option>
                <option value="inactivo" class="form-control">Inactivo</option>
          </select>
        </div>


        <div class=" col-xs-2 text-left">
          <button type="submit" class="btn btn-default" value="Enviar"> Actualizar </button>
        </div> 
        
        <div class=" col-xs-12 text-left">
          <p><hr/></p>
        </div> 

    </form>  
    <?php } ?>
</div>  
<!----- CONTENIDO ---->

<?php include("footer.php") ?>
</body>
</html>