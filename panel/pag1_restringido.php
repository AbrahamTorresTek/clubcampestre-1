<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
</head>
<body>

<?php 
    include("../conectarse.php");

    $corr = $_POST['user'];
    $pass = $_POST['pass'];

    // Sanitize inputs
    $corr = mysqli_real_escape_string($conexion, $corr);
    $pass = mysqli_real_escape_string($conexion, $pass);

    // Query the database for user credentials
    $consulta_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$corr' AND pass = '$pass' AND activo = 1");
    $tot = mysqli_num_rows($consulta_correo);

    if ($tot == 0) { 
        echo "<script>alert('Acceso Incorrecto');</script>";
        echo "<script>window.parent.location='index.php';</script>";
        exit;
    }

    // Fetch the result and store session variables
    $resultado = mysqli_fetch_array($consulta_correo);
    $_SESSION['usuario_nivel'] = $resultado['nivel_acceso'];
    $_SESSION['usuario_id'] = $resultado['id']; 
    $_SESSION['usuario_login'] = $resultado['usuario']; 

    // Display the user's access level (for debugging purposes)
    echo "Nivel: " . $_SESSION['usuario_nivel'];

    // Redirect based on user level
    if ($_SESSION['usuario_nivel'] == 400) {
        echo "<script>window.parent.location='menu_alta_dise.php';</script>";
    }
?>

</body>
</html>
