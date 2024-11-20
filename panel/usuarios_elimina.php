<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from usuarios where id ='$clave'");
?>

<script language='javascript'>window.parent.location='usuarios_todos.php'</script>

