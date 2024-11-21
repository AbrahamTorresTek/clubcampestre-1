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
		move_uploaded_file($archivo,$ruta);
                        $clave = $_GET['cve2'];
						$estado = $_POST['estado'];
						$nombre = $_POST['nombre'];
						$categoria = $_POST['categoria'];
						$precio = $_POST['precio'];
						$novedad = $_POST['novedad'];
                        $descripcion = $_POST['descripcion'];
						$mcaja = $_POST['m_caja'];
						$preciom2 = $_POST['precio_m2'];
                        $medidas = $_POST['medidas'];
                        $inv = $_POST['inventario'];
                        $piezas = $_POST['piezas'];
                        
                        $nombreimg=$_FILES['imagen']['name'];
						$archivo=$_FILES['imagen']['tmp_name'];
						$ruta="../catalogo";
						$ruta=$ruta."/".$nombreimg;
                        move_uploaded_file($archivo,$ruta);
                        

                        $insersion = mysqli_query( $conexion ,"update productos set id = '$clave', Estado = '$estado' , Foto = '$nombreimg' , Nombre = '$nombre' , Inventario = '$inv' , Categoria = '$categoria' , Precio = '$precio' , Novedad = '$novedad' , Descripcion = '$descripcion' , m_caja = '$mcaja' , Precio_m2 = '$preciom2' , Medidas = '$medidas' , Piezas = '$piezas'  where id = '$clave'");
                        
                        
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
                            PRODCUTO ACTUALIZADO CORRECTAMENTE
                            </div>
                            ";
                            echo "<br>";
                            ?>
                            
                            <?php } ?>

<a href="productos_todos.php">
<button type="button" class="btn btn-default">Ver Productos</button> 
</a>
<a href="productos.php">
<button type="button" class="btn btn-default">Agregar Productos</button>
</a>
<p><br></p>
</div>                           
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>