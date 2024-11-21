<?php include("cabezera.php"); ?>

<body>
      <div class="wrapper">
            <!-- LATERAL -->
            <?php include("admin.php"); ?>
            <!-- LATERAL -->

            <!-- CONTENIDO -->
            <div id="content">
                  <div class="row">

                        <!-- BOTON CERRAR -->
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
                  <!-- AGREGAR -->
                        <?php
                        $clave = $_GET['cve'];
                        $re = mysqli_query($conexion, "SELECT * FROM productos WHERE id='$clave'");
                        while ($row = mysqli_fetch_assoc($re)) { ?>

                              <form action="imgx_valida.php" method="POST" enctype="multipart/form-data">

                                    <div class=" col-xs-5 text-left">
                                          <h4 class=" tipo">Selecciona Imagen</h4>
                                          <input type="file" name="imagen" required class="form-control">
                                          <input type="text" name="id" class="invisible"  value="<?php echo $row['id'];?>" >  
                                    </div>

                                    <div class=" col-xs-4 text-left">
                                          <p><br /></p>
                                          <button type="submit" class="btn btn-warning" value="Enviar"> Agregar Imagen</button>
                                          <p><br /></p>
                                    </div>
                              </form>

                        <?php } ?>
                  <!-- AGREGAR -->                        
                  </div>

                  <div class=" col-xs-12 col-sm-4 text-left">
                        <h4 class="tipo color"> Imagenes </h4>
                  </div>

                  <div class=" col-xs-12 ">
                  </div>
                  <!-- BOTON CERRAR -->

                  <!----- CONTENIDO ---->
                  <?php
                  $clave = $_GET['cve'];
                  $re = mysqli_query($conexion, "SELECT * FROM imgx WHERE uno='$clave'");
                  while ($row = mysqli_fetch_assoc($re)) { ?>

                        <div class=" col-xs-12  col-sm-2  col-md-2  text-center ">
                              <img src="../imgx/<?php echo $row["f1"]; ?>" width="100%" class="contain" >
                              <p></p>
                              <a href="imgx_elimina.php?cve=<?php echo $row['id'];?>">
                              <button class="btn btn-xs btn-default btn-block"> Eliminar Imagen</button>
                              </a>
                              <p><br></p>
                        </div>

                  <?php } ?>
                  </section>
                  <!----- CONTENIDO ---->

                  <div class=" col-xs-12 text-left">
                  <hr>
                  </div>

                  <div class=" col-xs-3 text-left">
                        <a href="productos_todos.php">
                        <button class="btn btn-block btn-default"> Regresar a Propiedades </button>
                        </a>
                  </div>

            </div>
      </div>
      <?php include("footer.php") ?>
</body>

</html>