<?php include("cabezera.php");
include("../conectarse.php");
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion , "delete from imgx where id ='$clave'");
?>

<script>
window.history.back();			
</script>