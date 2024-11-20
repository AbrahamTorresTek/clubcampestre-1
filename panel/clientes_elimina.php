<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from clientes where id ='$clave'");
?>

<script language='javascript'>window.parent.location='clientes_todos.php'</script>

