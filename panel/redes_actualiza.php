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
                        $cero = $_POST['link'];
                        $dos = $_POST['estado'];

                        include("../conectarse.php");

                        $insersion = mysqli_query($conexion , "update redes set Id = '$clave' ,  Link = '$cero' , Estado = '$dos' where Id = '$clave'");
                        
                        if (!$insersion)
                        {
                                            
                            echo 'Contenido ingresado correctamente';
  
                            ?>
                            <script>
                            
                            alert("Contenido ingresado correctamente");
                            window.location = "redes_todas.php";
                            
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

                            <div class="col-xs-12 col-sm-12 text-left">
<a href="redes_todas.php">
<button type="button" class="btn btn-default">Ver redes</button> 
</a>
<p><br></p>
</div>
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>