<?php
include("conectarse.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal' order by id");
while($row=mysqli_fetch_assoc($re)) { ?>

  <meta name="description" content="<?php echo $row['nombre'];?>"/>
  <meta name="keywords" content="<?php echo $row['nombre'];?>"/>
  <meta name="keyphrases" content="<?php echo $row['nombre'];?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="css/estilos.css">
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="fonts/style.css"> 
  <title> <?php echo $row['nombre'];?> </title>

<?php } ?>

  <?php $f_icono = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='icono'"); 
  $foto_icono = mysqli_fetch_array($f_icono);?>
  <link rel="shortcut icon" href="imagenes/<?php echo $foto_icono['foto'];?>" >

<style type="text/css">
<?php include('css/estilos.php'); ?>
</style>

</head>

