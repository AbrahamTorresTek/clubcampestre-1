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
include("../conectarse.php");

	$uno = $_POST['uno'];
	$dos = $_POST['dos'];
	$tres = $_POST['tres'];
	$cuatro = $_POST['cuatro'];
	$cinco = $_POST['cinco'];
	$seis = $_POST['seis'];
	$siete = $_POST['siete'];
	$ocho = $_POST['ocho'];
	$nueve = $_POST['nueve'];
	$diez = $_POST['diez'];
	$once = $_POST['once'];
	$doce = $_POST['doce'];
	$trece = $_POST['trece'];
	$catorce = $_POST['catorce'];
	$quince = $_POST['quince'];
	$dieciseis = $_POST['dieciseis'];
	$diecisiete = $_POST['diecisiete'];
	$dieciocho = $_POST['dieciocho'];
	
	$descripcion= nl2br($_POST['descripcion']);
			
	$nombreimg=$_FILES['imagen']['name'];
	$archivo=$_FILES['imagen']['tmp_name'];
	$ruta="../clientes";
	$ruta=$ruta."/".$nombreimg;
	move_uploaded_file($archivo,$ruta);
	
	$nombreimg2=$_FILES['imagen2']['name'];
	$archivo2=$_FILES['imagen2']['tmp_name'];
	$ruta2="../clientes";
	$ruta2=$ruta2."/".$nombreimg2;
	move_uploaded_file($archivo2,$ruta2);

	$nombreimg3=$_FILES['imagen3']['name'];
	$archivo3=$_FILES['imagen3']['tmp_name'];
	$ruta3="../clientes";
	$ruta3=$ruta3."/".$nombreimg3;
	move_uploaded_file($archivo3,$ruta3);

	$inserta = mysqli_query($conexion , "INSERT INTO `clientes` ( `id`,  `uno` , `dos`  ,   `f1`  ) 
							             VALUES               ( NULL ,'$uno' , '$dos' ,'$nombreimg');");
	echo   mysqli_error();

					if ($inserta)
					{
					
						echo "<script language='javascript'>window.parent.location='clientes_todos.php'</script>";

					?>

					<script>
					alert("Contenido ingresado correctamente")
					window.location = "clientes_todos.php";
	
					</script>
					<?
				
					}
					else
					{
						
						echo 'Contenido NO ingresado'; 
						
						}
						
						
						echo "<br>";




					?>
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>