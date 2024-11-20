<? include("../conectarse.php");

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	
	$inserta = mysqli_query($conexion , "INSERT INTO `usuarios` ( `id`,  `usuario` , `pass` , `activo` , `padre`) 
							             VALUES                 ( NULL ,'$usuario' , '$pass',   '1'    ,   'no');");
	?>
<script language='javascript'>window.parent.location='usuarios_todos.php'</script>";
