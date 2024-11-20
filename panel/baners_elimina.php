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
$clave = $_GET['cve'];
$consulta = mysqli_query($conexion , "delete from banners where id ='$clave'");
?>

<div class="alert alert-danger col-xs-12 col-sm-6 col-sm-offset-3 text-center">
BANER ELIMINADO
</div>

<div class="col-xs-12 col-sm-12 text-center">
<p><br></p>
<a href="baners_todos.php">
<button type="button" class="btn btn-default">Ver Baners</button> 
</a>
<a href="baners.php">
<button type="button" class="btn btn-default">Agregar Baners</button>
</a>
<p><br></p>
</div>


<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>