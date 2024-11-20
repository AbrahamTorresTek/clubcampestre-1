<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from productos where id ='$clave'");
?>

<script language='javascript'>window.parent.location='productos_todos.php'</script>

