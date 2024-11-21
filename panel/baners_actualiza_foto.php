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
                        $estado = $_POST['estado'];
                        $tipo = $_POST['tipo'];
                        
                        $nombreimg=$_FILES['imagen']['name'];
						$archivo=$_FILES['imagen']['tmp_name'];
						$ruta="../baner";
						$ruta=$ruta."/".$nombreimg;
						move_uploaded_file($archivo,$ruta);

$insersion = mysqli_query($conexion , "update banners set id='$clave' , estado='$estado'  , tipo='$tipo' ,  foto='$nombreimg' where id = '$clave'");

                        
                        if (!$insersion)
                        {
                                            
                            echo 'Contenido ingresado correctamente';
  
                            ?>
                            <script>
                            
                            alert("Contenido ingresado correctamente");
                            window.location = "baners_todos.php";
                            
                            </script>
                            <?
                            }
                        
                            else
                            {
                                
                            echo "
                            <div class=\"alert alert-success col-xs-12 col-sm-12 text-center\">
                            CONTENIDO ACTUALIZADO CORRECTAMENTE
                            </div>
                            ";
                            echo "<br>";
                            ?>
                            
                            <?php } ?>

<a href="baners_todos.php">
<button type="button" class="btn btn-default">Ver Baners</button> 
</a>
<p><br></p>
</div>                           
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>