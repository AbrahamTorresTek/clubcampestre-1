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
                  <a href="blog_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Editar Imagen blog </h4>
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
                    $ruta="../blog";
                    $ruta=$ruta."/".$nombreimg;
                    move_uploaded_file($archivo,$ruta);                        
                    $insersion = mysqli_query( $conexion ,"UPDATE blog set id = '$clave' , f1 = '$nombreimg'  where id = '$clave'");
                        
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
                        blog ACTUALIZADO CORRECTAMENTE
                        </div>
                        ";
                    echo "<br>";
                    ?>
                    <? } ?>
                    
                </div>
            <!----- FORM ---->

            <!----- REGRESAR ---->
                <div class=" col-xs-12 col-sm-10 text-left">
                  <a href="blog_todos.php#<?php echo $_GET['cve2'];?>">
                    <button type="button" class="btn btn-default">Ver blog</button> 
                    </a>
                    <a href="blog.php">
                    <button type="button" class="btn btn-default">Agregar blog</button>
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