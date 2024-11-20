<?php include("../conectarse.php");

$id= $_GET['cve2'];
$regreso= $_GET['regreso'];
$titulo= $_POST['titulo'];
$subtitulo= $_POST['subtitulo'];
$tipo= $_POST['tipo'];
$estado= $_POST['estado'];
$ancho= $_POST['ancho'];
$alto= $_POST['alto'];
$lugar= $_POST['lugar'];
$acomodo= $_POST['acomodo'];
$idioma= $_POST['idioma'];
$seccion= $_POST['seccion'];
$link= $_POST['link'];
$link_tipo= $_POST['link_tipo'];

$insersion = mysqli_query($conexion , "update modulos set 

titulo = '$titulo', 
subtitulo = '$subtitulo', 
tipo= '$tipo', 
estado = '$estado', 
ancho = '$ancho', 
alto = '$alto', 
lugar = '$lugar', 
acomodo = '$acomodo', 
idioma = '$idioma', 
seccion = '$seccion', 
link = '$link', 
link_tipo = '$link_tipo', 

descripcion = '".nl2br($_POST["descripcion"])."'  

where id = '$id'");
?>
<?php echo $seccion ;?> - <?php echo $regreso ;?>
<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $seccion ;?>#<?php echo $regreso ;?>"; </script>                       