<?php
include("../conectarse.php");

$clave = $_GET['cve2'];   
$nombreimg = $_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../modulos";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);
$insersion = mysqli_query( $conexion ,"UPDATE `modulos` SET `f1` = '$nombreimg' WHERE `id` = '$clave'");

?>
<script language='javascript'> javascript:window.history.back(); </script>    
                            

 
