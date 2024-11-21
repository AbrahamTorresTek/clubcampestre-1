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
    $dieciocho = nl2br($_POST['dieciocho']);
	$descripcion= nl2br($_POST['descripcion']);
	$tipo = $_POST['tipo'];
	$pdf = $_POST['pdf'];
	$pdfdos = $_POST['pdfdos'];

	$nombreimg=$_FILES['imagen']['name'];
	$archivo=$_FILES['imagen']['tmp_name'];
	$ruta="../catalogo";
	$ruta=$ruta."/".$nombreimg;
	move_uploaded_file($archivo,$ruta);
	
	$nombreimg2=$_FILES['imagen2']['name'];
	$archivo2=$_FILES['imagen2']['tmp_name'];
	$ruta2="../catalogo";
	$ruta2=$ruta2."/".$nombreimg2;
	move_uploaded_file($archivo2,$ruta2);

	$nombreimg3=$_FILES['imagen3']['name'];
	$archivo3=$_FILES['imagen3']['tmp_name'];
	$ruta3="../catalogo";
	$ruta3=$ruta3."/".$nombreimg3;
	move_uploaded_file($archivo3,$ruta3);

	$nombreimg4=$_FILES['imagen4']['name'];
	$archivo4=$_FILES['imagen4']['tmp_name'];
	$ruta4="../catalogo";
	$ruta4=$ruta4."/".$nombreimg4;
	move_uploaded_file($archivo4,$ruta4);

	$nombreimgpdf=$_FILES['pdf']['name'];
	$archivopdf=$_FILES['pdf']['tmp_name'];
	$rutapdf="../catalogo";
	$rutapdf=$rutapdf."/".$nombreimgpdf;
	move_uploaded_file($archivopdf,$rutapdf);

	$nombreimgpdfdos=$_FILES['pdfdos']['name'];
	$archivopdfdos=$_FILES['pdfdos']['tmp_name'];
	$rutapdfdos="../catalogo";
	$rutapdfdos=$rutapdfdos."/".$nombreimgpdfdos;
	move_uploaded_file($archivopdfdos,$rutapdfdos);

	$inserta = mysqli_query($conexion , "INSERT INTO `productos` ( `id`,  `uno` , `dos`  , `tres` , `cuatro` , `cinco` , `seis` , `siete` , `ocho` , `nueve` , `diez` , `once` , `doce` , `trece` , `catorce` , `quince` ,  `dieciseis` ,  `diecisiete` ,  `dieciocho` , `descripcion`,   `f1`     ,     `f2`    ,     `f3`      ,      `f4`    ,      `pdf`   ,      `pdfdos`   ,   `tipo`      ) 
							             VALUES                  ( NULL ,'$uno' , '$dos' ,'$tres' ,'$cuatro' ,'$cinco' , '$seis', '$siete', '$ocho', '$nueve' ,'$diez', '$once','$doce' ,'$trece' ,'$catorce' , '$quince', '$dieciseis' , '$diecisiete' , '$dieciocho' , '$descripcion','$nombreimg','$nombreimg2','$nombreimg3' ,'$nombreimg4' ,'$nombreimgpdf','$nombreimgpdfdos' ,'principal');");

if ($inserta)
{

	echo "<script language='javascript'>window.parent.location='productos_todos.php'</script>";

?>

<script>
alert("Contenido ingresado correctamente")
window.location = "productos_todos.php";

</script>
<?

}


					?>
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>