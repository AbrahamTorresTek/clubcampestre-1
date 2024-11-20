<?php include("../conectarse.php");
$clave = $_GET['cve'];
$claved = $_GET['cve2'];
$uno = $_POST['uno'];
$dos = $_POST['dos'];
$tres = $_POST['tres'];
$cuatro = $_POST['cuatro'];
$cinco = $_POST['cinco'];
$seis = $_POST['seis'];
$siete = $_POST['siete'];
$f1 = $_POST['f1'];

$inserta = mysqli_query($conexion , "INSERT INTO `calendario` ( 

`id`, `uno`, `dos`, `tres`, `cuatro`, `cinco`, `seis`, `siete`, `f1`

) VALUES ( 

NULL,'$uno','$dos','$tres','$cuatro','$cinco','$seis','$siete','$f1'

);");
?>
<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $claved ;?>#calendario"; </script>
