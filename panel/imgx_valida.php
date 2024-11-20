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



<?
				include("../conectarse.php");
                        $clave = $_POST['id'];
						$nombreimg=$_FILES['imagen']['name'];
						$archivo=$_FILES['imagen']['tmp_name'];
						$ruta="../imgx";
						$ruta=$ruta."/".$nombreimg;
						move_uploaded_file($archivo,$ruta);


				$inserta = mysqli_query($conexion , "INSERT INTO `imgx` ( `id` ,   `uno`  ,     `dos`   ,    `f1`  ) 
							            VALUES                          ( NULL ,  '$clave' ,    ''   ,  '$nombreimg' );");

					if ($inserta)
					{					
					?>
					<h2>Imagen Ingresada Correctamente</h2>
                    <div class=" col-xs-3 text-left">
                        <a href="imgx_index.php?cve=<? echo $clave ?>">
                        <button class="btn btn-block btn-default"> Regresar a Propiedades </button>
                        </a>
                    </div>
					<?
					}
					else
					{
						echo 'Contenido NO ingresado'; 
						}
						echo "<br>";
					?>
					
<!----- CONTENIDO ---->
            
<div class=" col-xs-12 text-left">
<hr>
</div>



</div>
</div>
<?php include("footer.php") ?>
</body>
</html>