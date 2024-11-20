<?php 
include("../conectarse.php");
$clave = $_GET['cve2'];    
$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../imagenes";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);                        
$insersion = mysqli_query( $conexion ,"UPDATE imagenes set id = '$clave' , foto = '$nombreimg'  where id = '$clave'");
?>
<script>window.location = "colores.php";</script>                    
               