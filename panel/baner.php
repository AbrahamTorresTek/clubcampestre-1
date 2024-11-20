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
                        <div class="row">
                              <form action="baner_valida.php" method="POST" enctype="multipart/form-data">


                                          <div class=" col-xs-3 text-left">
                                                <h4 class="tipo">Estado</h4> 
                                                      <select name="estado" id="estado" required class="form-control">
                                                            <option value="activo" selected="selected">activo</option>
                                                            <option value="inactivo" class="form-control">inactivo</option>
                                                      </select>
                                          </div>
                                          <div class=" col-xs-3 text-left">
                                                <h4 class="titulo">tipo</h4> 
                                                      <select name="titulo" id="titulo" required class="form-control">
                                                            <option value="principal" selected="selected">Computadora </option>
                                                            <option value="principal-movil" class="form-control">Celular</option>
                                                      </select>
                                          </div>

                                          <div class=" col-xs-10">
                                          </div>

                                          <div class=" col-xs-10 text-left">
                                                <h4 class=" tipo">Selecciona Imagen</h4> 
                                                <input type="file" name="imagen" required class="form-control" >
                                          </div>


                                          <div class=" col-xs-10">
                                          </div>


                                          <div class=" col-xs-10 text-left">
                                                <p><br/></p>
                                                <button type="submit" class="btn btn-default" value="Enviar"> Guardar Baner</button>
                                                <p><br/></p>
                                          </div>      
                                                
                              </form>        
                        </div>
                  <!----- CONTENIDO ---->
      
        </div>  
        <!-- CONTENIDO -->

<?php include("footer.php") ?>

</body>
</html>