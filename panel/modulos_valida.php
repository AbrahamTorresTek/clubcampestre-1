<?php include("../conectarse.php");
$clave = $_GET['cve2'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$modulo = $_POST['modulo'];
$seccion = $_POST['seccion'];
$tipo = $_POST['tipo'];
$estado = $_POST['estado'];

$alto = $_POST['alto'];
$ancho = $_POST['ancho'];
$lugar = $_POST['lugar'];
$acomodo = $_POST['acomodo'];
$idioma = $_POST['idioma'];
$link = $_POST['link'];
$link_tipo = $_POST['link_tipo'];

$descripcion= nl2br($_POST['descripcion']);

$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="../modulos";
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);

$nombreimg2=$_FILES['imagen2']['name'];
$archivo2=$_FILES['imagen2']['tmp_name'];
$ruta2="../modulos";
$ruta2=$ruta2."/".$nombreimg2;
move_uploaded_file($archivo2,$ruta2);

$inserta = mysqli_query($conexion , "INSERT INTO `modulos` ( 

`id`, `titulo`, `subtitulo`, `seccion`, `tipo`, `estado`, `alto`, `ancho`, `modulo`, `lugar`, `acomodo`, `idioma`, `descripcion`,`link`,`link_tipo`, `f1` , `f2`

) VALUES ( 

NULL,'$titulo','$subtitulo','$clave','$tipo','$estado','$alto','$ancho','$modulo','$lugar','$acomodo','$idioma','$descripcion','$link','$link_tipo','$nombreimg','$nombreimg2'

);");
?>
<script language='javascript'> window.location.href = "secciones_edita.php?cve=<?php echo $clave ;?>#<?php echo $modulo ;?>"; </script>
