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


<?
				include("../conectarse.php");
						$estado = $_POST['estado'];
                        $titulo = $_POST['tipo'];
                        $titulo = $_POST['titulo'];
						
						$nombreimg=$_FILES['imagen']['name'];
						$archivo=$_FILES['imagen']['tmp_name'];
						$ruta="../baner";
						$ruta=$ruta."/".$nombreimg;
						move_uploaded_file($archivo,$ruta);


				$inserta = mysqli_query($conexion , "INSERT INTO `banners` ( `id` , `tipo`  , `titulo`  ,     `estado`   ,    `foto`  ) 
							            VALUES                             ( NULL , '$titulo' , '$titulo' , '$estado'   ,  '$nombreimg' );");
					?>
<!----- CONTENIDO ---->
            
<div class="alert alert-success col-xs-12 col-sm-6 col-sm-offset-3 text-center">
BANER AGREGADO
</div>

<div class="col-xs-12 col-sm-12 text-center">
<p><br></p>
<a href="baners_todos.php">
<button type="button" class="btn btn-default">Ver Baners</button> 
</a>
<a href="baners.php">
<button type="button" class="btn btn-default">Agregar Baners</button>
</a>
<p><br></p>
</div>
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>