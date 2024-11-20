<?php
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion , "DELETE from modulos where id ='$clave'");
?>
<script language='javascript'> javascript:window.history.back(); </script>                         