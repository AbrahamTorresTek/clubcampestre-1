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

$insersion = mysqli_query($conexion , "UPDATE calendario SET 

uno = '$uno',
dos = '$dos',
tres = '$tres',
cuatro = '$cuatro',
cinco = '$cinco',
seis = '$seis',
siete = '$siete'

WHERE id = '$clave' ");

?>
<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $claved ;?>#calendario"; </script>