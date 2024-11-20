<?php
include("../conectarse.php");

$id= $_GET['cve2'];   
$seccion= $_GET['seccion'];   
$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../modulos";
$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo,$ruta);
$insersion = mysqli_query($conexion , "UPDATE modulos set id = '$id',  f1 = '$nombreimg' where id = '$id'");

?>
<script language='javascript'> javascript:window.history.back(); </script>    
                            