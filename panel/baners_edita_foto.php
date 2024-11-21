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
                $clave = $_GET['cve']; 
                $re = mysqli_query($conexion,"SELECT * FROM banners WHERE id='$clave'");
                while($row = mysqli_fetch_assoc($re)) { ?>   


    <div class="container">
        <div class="row">
            <form action="baners_actualiza_foto.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">


                <div class=" col-xs-10 text-left">

                    <input type="text" name="id" class="invisible"  value="<?php echo $row['id'];?>" >  
                    <input type="text" name="estado" class="invisible"  value="<?php echo $row['estado'];?>" >  
                    <input type="text" name="tipo" class="invisible"  value="<?php echo $row['tipo'];?>" >  

                </div>

                <div class=" col-xs-10 text-left">
                    <input type="file" name="imagen" required class="form-control" >
                    <h4 class=" tipo">Selecciona Imagen</h4> 
                </div>
                
                <div class=" col-xs-10 text-left">
                    <button type="submit" class="btn btn-default" value="Enviar"> Actualizar Imagen </button>
                    <p><br/></p>
                </div>      
        
                            
            </form>           
        </div>
    </div>
<?php } ?>    
<!----- CONTENIDO ---->
            
            
            
            
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>