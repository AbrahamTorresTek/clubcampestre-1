<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from marcas where id ='$clave'");
?>

<script language='javascript'>window.parent.location='marcas_todos.php'</script>

