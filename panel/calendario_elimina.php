<?php include("../conectarse.php");
$clave = $_GET['cve'];
$claved = $_GET['cve2'];
$consulta = mysqli_query($conexion ,"delete from calendario where id ='$clave'");

?>
<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $claved ;?>#calendario"; </script>