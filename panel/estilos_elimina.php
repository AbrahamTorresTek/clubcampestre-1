<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from estilos where id ='$clave'");
?>

<script language='javascript'>window.parent.location='estilos_todos.php'</script>

