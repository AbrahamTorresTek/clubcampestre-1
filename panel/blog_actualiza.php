<?php include("cabezera.php");?>

<body>

    <div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

        <!-- CONTENIDO -->
        <div id="content">
          
            <!-- BOTON CERRAR -->
              <button type="button" id="sidebarCollapse" class="navbar-btn">
                              <span></span>
                              <span></span>
                              <span></span>
              </button>
              <p></p>
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->

<?php
include("../conectarse.php");

    $clave = $_GET['cve2'];
	$uno = $_POST['uno'];
	$dos = $_POST['dos'];
	$tres = $_POST['tres'];
	$cuatro = $_POST['cuatro'];
	$cinco = $_POST['cinco'];
	$seis = $_POST['seis'];
	$siete = $_POST['siete'];
	$ocho = $_POST['ocho'];
	$nueve = $_POST['nueve'];
	$diez = $_POST['diez'];
	$once = $_POST['once'];
	$doce = $_POST['doce'];
	$trece = $_POST['trece'];
	$catorce = $_POST['catorce'];
	$quince = $_POST['quince'];
	$dieciseis = $_POST['dieciseis'];
	$diecisiete = $_POST['diecisiete'];
    $dieciocho = $_POST['dieciocho'];

    $funo = $_POST['funo'];
    $fdos = $_POST['fdos'];
    $ftres = $_POST['ftres'];

    $descripcion= nl2br($_POST['descripcion']);

    $insersion = mysqli_query($conexion , "UPDATE blog SET id = '$clave' ,uno='$uno' ,dos='$dos' ,tres='$tres' ,cuatro='$cuatro' ,cinco='$cinco' ,seis='seccion.php?cve=$dieciocho' ,siete='$siete' ,ocho='$ocho' ,nueve='$nueve' ,diez='$diez' ,once='$once' ,doce='$doce' ,trece='$trece' ,catorce='$catorce' ,quince='$quince' ,dieciseis='$dieciseis' ,diecisiete='$diecisiete' ,dieciocho='$dieciocho' , descripcion = '".nl2br($_POST["descripcion"])."' ,f1='$funo' ,f2='$fdos' ,f3='$ftres'  where id = '$clave'");
                        
                        
                        if (!$insersion)
                        {
                                            
                            echo 'Contenido ingresado correctamente';
  
                            ?>
                            <script>
                            
                            alert("Contenido ingresado correctamente");
                            window.location = "blog_todos.php";
                            
                            </script>
                            <?
                            }
                        
                            else
                            {
                                
                            echo "
                            <div class=\"alert alert-success col-xs-12 col-sm-12 text-center\">
                            PRODCUTO ACTUALIZADO CORRECTAMENTE
                            </div>



                            ";
                            echo "<br>";
                            ?>
                            
                            <?php } ?>

                            <div class="col-xs-12 col-sm-12 text-center">
<a href="blog_todos.php#<?php echo $_GET['cve2'];?>">
<button type="button" class="btn btn-default">Regresar</button> 
</a>
<a href="blog.php">
<button type="button" class="btn btn-default">Agregar nuevo</button>
</a>
<p><br></p>
</div>
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>