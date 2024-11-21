<?php include("cabezera.php");?>

<body>

<div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

    <!-- CONTENIDO -->
    <div id="content">
    <div class="row">
          
           <!-- BOTON CERRAR -->
                <div class=" col-xs-12 col-sm-1 text-left">
                  <button type="button" id="sidebarCollapse" class="btn">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                  </button>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> OCULTAR MENU LATERAL</h4>
                </div>

                <div class=" col-xs-12 ">
                  <hr>
                </div>

                <div class=" col-xs-12 col-sm-3 text-left">
                  <a href="productos_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Editar Imagen Producto </h4>
                </div>

                <div class=" col-xs-12 ">
                  <br>
                </div>  
            <!-- BOTON CERRAR -->

            <!----- FORM ---->
                <div class=" col-xs-12 col-sm-10 text-left">

                    <?php move_uploaded_file($archivo,$ruta);
                    $clave = $_GET['cve2']; 
                    $nombreimg=$_FILES['imagen']['name'];
                    $archivo=$_FILES['imagen']['tmp_name'];
                    $ruta="../catalogo";
                    $ruta=$ruta."/".$nombreimg;
                    move_uploaded_file($archivo,$ruta);                        
                    $insersion = mysqli_query( $conexion ,"UPDATE productos set id = '$clave' , f1 = '$nombreimg'  where id = '$clave'");
                        
                    if (!$insersion)
                    {
                    echo 'Contenido ingresado correctamente';
                    ?>
                    <script>
                        alert("Contenido ingresado correctamente");
                        window.location = "productos_todos.php";
                    </script>
                    <?
                    }
                    else
                    {
                    echo "
                        <div class=\"alert alert-success col-xs-12 col-sm-12 text-center\">
                        PRODUCTO ACTUALIZADO CORRECTAMENTE
                        </div>
                        ";
                    echo "<br>";
                    ?>
                    <?php } ?>
                    
                </div>
            <!----- FORM ---->

            <!----- REGRESAR ---->
                <div class=" col-xs-12 col-sm-10 text-left">
                    <a href="productos_todos.php">
                    <button type="button" class="btn btn-default">Ver Productos</button> 
                    </a>
                    <a href="productos.php">
                    <button type="button" class="btn btn-default">Agregar Productos</button>
                    </a>
                    <p><br></p>
                </div>     
            <!----- REGRESAR ---->                      
            
    </div>    
    </div>  
    <!-- CONTENIDO -->

<?php include("footer.php") ?>
</div>

</body>
</html>