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

                        $fondogeneral = $_POST['fondogeneral'];
                        $fondogeneraltexto = $_POST['fondogeneraltexto'];
                        $link = $_POST['link'];
                        $linkhover = $_POST['linkhover'];
                        $menuborder = $_POST['menuborder'];
                        $menufondo = $_POST['menufondo'];
                        $menutexto = $_POST['menutexto'];
                        $menuhover = $_POST['menuhover'];
                        $color1 = $_POST['color1'];
                        $color2 = $_POST['color2'];
                        $color3 = $_POST['color3'];
                        $color4 = $_POST['color4'];
                        $fondocolor1 = $_POST['fondocolor1'];
                        $fondocolor2 = $_POST['fondocolor2'];
                        $fondocolor3 = $_POST['fondocolor3'];
                        $fondocolor4 = $_POST['fondocolor4'];
                        $fondocolortexto1 = $_POST['fondocolortexto1'];
                        $fondocolortexto2 = $_POST['fondocolortexto2'];
                        $fondocolortexto3 = $_POST['fondocolortexto3'];
                        $fondocolortexto4 = $_POST['fondocolortexto4'];


                        include("../conectarse.php");

                        $insersion = mysqli_query($conexion , "UPDATE colores set  
                        
                        menuborder = '$menuborder' ,menuhover = '$menuhover' ,menutexto = '$menutexto' ,menufondo = '$menufondo' ,linkhover = '$linkhover' ,link = '$link' ,color1 = '$color1' ,color2 = '$color2' ,color3 = '$color3' ,color4 = '$color4' ,fondocolor1 = '$fondocolor1' ,fondocolor2 = '$fondocolor2' ,fondocolor3 = '$fondocolor3' ,fondocolor4 = '$fondocolor4' ,fondocolortexto1 = '$fondocolortexto1' ,fondocolortexto2 = '$fondocolortexto2' ,fondocolortexto3 = '$fondocolortexto3' ,fondocolortexto4 = '$fondocolortexto4' ,fondogeneral = '$fondogeneral' ,fondogeneraltexto = '$fondogeneraltexto'
                        
                        where id = '$clave'");
                        ?>

                            <div class="col-xs-12 col-sm-12 text-center">
                            <script>
                            window.location = "colores.php";
                            </script>

<a href="colores.php">
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