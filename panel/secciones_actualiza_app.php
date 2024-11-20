<?php include("../conectarse.php");

$id= $_GET['cve2'];
$quince= $_POST['quince'];

$insersion = mysqli_query($conexion , "update secciones set 

quince = '$quince'

where id = '$id'");
?>

<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $id ;?>"; </script>                       