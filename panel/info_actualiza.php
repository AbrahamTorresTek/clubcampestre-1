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
                        $clave = $_GET['cve2'];
                        $tipo = $_POST['tipo'];
                        $cero = $_POST['telefono'];
                        $telefonos = $_POST['telefonos'];
						$uno = $_POST['whatsapp'];
                        $whatsapp = $_POST['whatsapps'];
						$dos = $_POST['link_whatsapp'];
						$tres = $_POST['email'];
                        $correos = $_POST['correos'];
                        $email2 = $_POST['email2'];
						$cuatro = $_POST['correo2'];
						$cinco = $_POST['mapa'];
                        $web = $_POST['web'];
                        $nombre = $_POST['nombre'];
						$siete= nl2br($_POST['direccion']);
                        $horario= nl2br($_POST['horario']);

                        include("../conectarse.php");

                        $insersion = mysqli_query($conexion , "update informacion set id = '$clave',  telefono = '$cero' , telefonos = '".nl2br($_POST["telefonos"])."'  , whatsapp = '$uno' , tipo = '$tipo' , whatsapps = '".nl2br($_POST["whatsapps"])."' , link_whatsapp = '$dos' , email = '$tres' , email2 = '$email2'  , correo2 = '$cuatro' , correos = '".nl2br($_POST["correos"])."' , mapa = '$cinco' , web = '$web' ,  nombre = '$nombre' , direccion = '".nl2br($_POST["direccion"])."' , horario = '".nl2br($_POST["horario"])."'  where id = '$clave'");
                        
                        if (!$insersion)
                        {
                                            
                            echo 'Contenido ingresado correctamente';
  
                            ?>
                            <script>
                            
                            alert("Contenido ingresado correctamente");
                            window.location = "contenidos_todos.php";
                            
                            </script>
                            <?
                            }
                        
                            else
                            {
                                
                            echo "
                            <div class=\"alert alert-success col-xs-12 col-sm-12 text-center\">
                            CONTENIDOS ACTUALIZADO CORRECTAMENTE
                            </div>



                            ";
                            echo "<br>";
                            ?>
                            
                            <?php } ?>

                            <div class="col-xs-12 col-sm-12 text-center">
<a href="informacion.php?cve=1">
<button type="button" class="btn btn-default">Ver datos de contacto</button> 
</a>
<p><br></p>
</div>
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>