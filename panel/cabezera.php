<?php session_start(); 
      error_reporting(0);
 
			include("../conectarse.php");
			if($_SESSION['usuario_id'] == ""){ 
				echo "<script language='javascript'>window.parent.location='index.php'</script>";
			}

			if($_SESSION['usuario_id'] == -1){ 
				echo "<script language='javascript'>window.parent.location='aut_logout.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 500){
				echo "<script language='javascript'>window.parent.location='menu_operador.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 600){	
				echo "<script language='javascript'>window.parent.location='menu_rh.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 700) {
				echo "<script language='javascript'>window.parent.location='menu_adm.php'</script>";
			}		
			
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Intranet</title>

	<link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/barra.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'40%'});</script>
    
</head>