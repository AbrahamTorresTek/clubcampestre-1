<?php include("cabezera.php");?>

<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion ,"delete from categorias where id ='$clave'");
?>

<script language='javascript'> javascript:window.history.back(); </script>

