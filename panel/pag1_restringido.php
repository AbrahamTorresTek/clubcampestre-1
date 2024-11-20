<? session_start(); ?>
<title>Intranet</title>
<? 

			include("../conectarse.php");
			
			$corr = $_POST['user'];
			$pass = $_POST['pass'];

			$corr = mysqli_real_escape_string($conexion,$_POST['user']);
			$pass = mysqli_real_escape_string($conexion,$_POST['pass']);

			$consulta_correo = mysqli_query($conexion , "select * from usuarios where usuario = '$corr' and pass = '$pass' and activo = 1");
			$tot = mysqli_num_rows($consulta_correo);
						
			if ($tot == 0){ 
				?>	
					<script>
                    alert(" Acceso Incorrecto ");
                    </script>	
				<?
					echo "<script language='javascript'>window.parent.location='index.php'</script>";
			}

				 $resultado =  mysqli_fetch_array($consulta_correo);
				 $_SESSION['usuario_nivel'] = $resultado['nivel_acceso'];
				 $_SESSION['usuario_id'] 	= $resultado['id']; 
				 $_SESSION['usuario_login'] = $resultado['usuario']; 
				 
				 echo "Nivel".$_SESSION['usuario_nivel'];
				 
				if ($_SESSION['usuario_nivel'] == 400)
				{
                echo "<script language='javascript'>window.parent.location='menu_alta_dise.php'</script>";
				}
?>

</body>
</html>
