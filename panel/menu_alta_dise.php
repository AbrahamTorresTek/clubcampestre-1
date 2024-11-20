<?php session_start(); 
      error_reporting(0);
 
			include("../conectarse.php");
			if($_SESSION['usuario_id'] == ""){ 
				echo "<script language='javascript'>window.parent.location='index.php'</script>";
			}

			if($_SESSION['usuario_id'] == -1){ 
				echo "<script language='javascript'>window.parent.location='aut_logout.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 500){
				echo "<script language='javascript'>window.parent.location='menu_operador.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 600){	
				echo "<script language='javascript'>window.parent.location='menu_rh.php'</script>";
			}

			if ($_SESSION['usuario_nivel'] == 700) {
				echo "<script language='javascript'>window.parent.location='menu_adm.php'</script>";
			}		
			
?>
<?php include("cabezera.php");?>

<body>

<div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

      <!-- CONTENIDO -->
      <div id="content">
          
           <!-- BOTON CERRAR -->
           <div class="row">

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
                  <h4 class="tipo color"> Pagina principal </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- INFO ---->
                  <div class=" col-xs-12 col-sm-12 text-left">
                      <h3 class="tipo colornegro">Videos</h3>
                      <hr>
                  </div> 
                  
                  <div class=" col-xs-12 col-sm-5 text-left">
                      <h4 class="tipo">Agregar / Editar - Banners</h4>
                      <iframe width="100%" height="300" src="https://www.youtube.com/embed/NiAmZxMJCl0?si=XwR1ZbNkZW_hJBkF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div> 
                  <div class=" col-xs-12 col-sm-5 text-left">
                      <h4 class="tipo">Agregar / Editar - Secciones</h4>
                      <iframe width="100%" height="300" src="https://www.youtube.com/embed/TPRB5YFGUIc?si=K0D3d0QaaDF8m33P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div> 
                  <div class=" col-xs-12 col-sm-5 text-left">
                      <h4 class="tipo">Agregar / Editar - Modulos</h4>
                      <iframe width="100%" height="300" src="https://www.youtube.com/embed/JlE_s6jIwhA?si=AThAMVVgvRrA7hd0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div> 

           <!----- INFO ---->

      </div>  
      <!-- CONTENIDO -->
</div>

<!-- FOOTER -->
<?php include("footer.php") ?>
<!-- FOOTER -->

</body>
</html>