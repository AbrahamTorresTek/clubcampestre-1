<?php include("cabezera.php");?>

<body>

    <div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

        <!-- CONTENIDO -->
        <div id="content">
          
            <!-- BOTON CERRAR -->
              <button type="button" id="sidebarCollapse" class="navbar-btn">
                              <span></span>
                              <span></span>
                              <span></span>
              </button>
              <p></p>
            <!-- BOTON CERRAR -->


                  <!----- CONTENIDO ---->

                  <?php 
                  $clave = $_GET['cve']; 
                  $re = mysqli_query($conexion,"SELECT * FROM banners WHERE id='$clave'");
                        while($row = mysqli_fetch_assoc($re)) { ?>   

                        <div class="row">
                              <form action="baners_actualiza.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

                                          
                                                <div class=" col-xs-3 text-left">
                                                      <h4 class=" tipo">Estado</h4> 
                                                            <select name="estado" id="estado" required class="form-control">
                                                            <option value="<?php echo $row['estado'];?>" selected="<?php echo $row['estado'];?>"><?php echo $row['estado'];?></option>
                                                                  <option value="activo" class="form-control">Activo</option>
                                                                  <option value="inactivo" class="form-control">Inactivo</option>
                                                            </select>
                                                </div>
                                          
                                                <div class=" col-xs-3 text-left">
                                                <h4 class="tipo">tipo</h4> 
                                                      <select name="tipo" id="" required class="form-control">
                                                            <option value="<?php echo $row['tipo'];?>" selected="selected"><?php echo $row['tipo'];?></option>
                                                            <option value="principal" class="form-control">principal </option>
                                                            <option value="principal-movil" class="form-control">principal celular</option>

                                                            <option value="baner-2" class="form-control">banner 2</option>
                                                            <option value="baner-2-movil" class="form-control">banner 2 celular</option>

                                                            <option value="baner-3" class="form-control">banner 3</option>
                                                            <option value="baner-3-movil" class="form-control">banner 3 celular</option>
                                                      </select>
                                          </div>

                                          <div class=" col-xs-10 text-left">
                                          <input type="text" name="foto" required class="invisible"  value="<?php echo $row['foto'];?>" >
                                          </div>


                                          <div class=" col-xs-10 text-left">
                                                <p><br/></p>
                                                <button type="submit" class="btn btn-default" value="Enviar"> Guardar Baner</button>
                                                <p><br/></p>
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