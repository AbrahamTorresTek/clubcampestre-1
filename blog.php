<?php include("cabecera.php"); ?>
<body topmargin="0">
<header><!--- HEADER --->
  <!--- LOGO --->
    <?php include("logo.php"); ?>
  <!--- LOGO --->
  <div class="sigue"><!--- SIGUE --->
  <!--- MENU --->
    <?php include("menu.php"); ?>
  <!--- MENU --->
  </div><!--- TERMINA SIGUE --->

  <!--- POP --->
<?php include("mod-pop.php"); ?>
<!--- POP --->

  <!--- IMG SUPERIOR ---->
  <div class="" style="position:relative; top:0px; left:0px; height:300px; width:100%;">

    <div class="" style="position:absolute; top:0px; left:0px; height:300px; width:100%; z-index:-1">
    <?php $refoto = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='contacto-top'"); 
    $rowfoto = mysqli_fetch_array($refoto);?>
      <img src="imagenes/<?php echo $rowfoto['foto'];?>" alt="<?php echo $row['siete'];?>" width="100%" style="object-fit:cover; height:300px;  border-radius:0px;">
    </div> 
    <div class="decoracion-fondo-top" style="position:absolute; bottom:0px; left:0px; height:200px; width:100%; z-index:2">
      <div class="text-center" style="padding-top:140px;">
        <h1 class="tipo-2 color-blanco sombra-texto"><?php echo $rowsec['uno'];?></h1>
      </div> 
    </div> 

  </div> 


  <!--- INFORMACION --->
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">

      <?php $clave = $_GET['cve']; $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND dieciocho ='$clave'");
            while($rowdes=mysqli_fetch_assoc($redes)) { ?>
        <!--- ESCRITORIO --->
        <div class="col-xs-12  col-sm-7 text-center fondo-blanco contorno ocultar-movil" style="padding:30px;"> 
            <img src="blog/<?php echo $rowdes['f1'];?>" alt="<?php echo $row['siete'];?>" width="100%" class="" style="object-fit:contain; height:500px;  border-radius:1px;">                                
        </div>
        <div class="col-xs-12  col-sm-5 text-center fondo-blanco contorno ocultar-movil" style="padding:30px;"> <p style="height:10px"></p>
        <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="500px" align="center" valign="middle">  
            <h2 class="tipo-2 color-3 mayusculas"><?php echo $rowdes['uno']; ?></h2>
            <p style="height:0px"></p>  
            <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
            <p style="height:2px"></p>  
            <div style="padding:1px 5px 0px 10px">  
                <p class="text-center tipo"><?php echo $rowdes['descripcion'];?></p>
            </div>
            <p style="height:20px"></p>  
            </td></tr></table>    
        </div>

        <?php } ?>

        <!--- MOVIL --->
        <div class="mostrar-movil" style="padding:30px;">  
          <div class="col-xs-12 text-center"  style="padding:30px;">                  
              <?php $clave = $_GET['cve']; $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND dieciocho ='$clave'");
              while($rowdes=mysqli_fetch_assoc($redes)) { ?>
              <img src="blog/<?php echo $rowdes['f1'];?>" alt="<?php echo $row['siete'];?>" width="100%" class="" style="object-fit:cover; height:350px;  border-radius:1px;">      
              <p style="height:20px"></p> 
              <h2 class="tipo-2 color-3 mayusculas"><?php echo $rowdes['uno']; ?></h2>
              <p style="height:10px"></p>  
              <div class="fondo-3 text-center" style="height:2px; width:70px;  margin:auto"></div>
              <p style="height:2px"></p>  
              <div style="padding:1px 5px 0px 10px">  
                  <p class="text-center tipo"><?php echo $rowdes['descripcion'];?></p>
              </div>
              <?php } ?>
          </div> 
        </div> 

      </div>
      </div>
  <!--- INFORMACION --->

  <!--- NOTICAS DESTACADAS --->
  <div class="fondo-4">
  <div class="container" style="padding:50px 30px 50px 30px;">
  <div class="row" style="padding:100px 20px 100px 20px;display: flex; justify-content: center; flex-wrap: wrap;">

    <div class="col-xs-12 col-sm-12 text-center">  
        <h2 class="tipo-2 mayusculas color-3 ">Noticias Actividades y Eventos Destacados</h2>
        <p style="height:30px;"></p>
    </div> 

    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND tres ='destacado' AND doce ='espanol' order by id DESC LIMIT 3");
    while($rowdes=mysqli_fetch_assoc($redes)) { ?>
    
    <div class="col-xs-12  col-sm-4" style="padding:20px;"> 
    <div class="text-center sombra link-sombra fondo-blanco contorno" style="padding:10px; height:600px;"> 
        <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
       <img src="blog/<?php echo $rowdes['f1'];?>" alt="<?php echo $row['siete'];?>" width="100%" class="" style="object-fit:cover; height:300px;  border-radius:1px;">  
       </a>                      
        <div style="padding:40px;">   
            <h4 class="tipo-2 color-1 mayusculas"><?php echo $rowdes['uno']; ?></h4>
            <p style="height:10px"></p> 
            <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto"></div>
            <p style="height:10px"></p> 
            <p class="text-center tipo"><?php $des = substr($rowdes['descripcion'], 0, 100); echo $des; ?>...</p>
            <p style="height:20px"></p> 
            <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
            <p class="tipo-2 mayusculas">Ver más</p>
            </a>
        </div>

    </div>
    </div>

    <?php } ?>

  </div>
  </div>
  </div>
  <!--- NOTICAS DESTACADAS --->

  <!--- INFO 2 --->
  <?php include("mod-info.php"); ?>
  <!--- INFO 2 --->

</header><!--- CIERRE HEADER --->
  
  <!--- AMENIDADES --->
  <?php include("mod-amenidades.php"); ?>
  <!--- AMENIDADES --->

  <!--- DESCARGAS --->
  <?php include("mod-descargas.php"); ?>
  <!--- DESCARGAS --->

  <!--- APP --->
  <?php include("mod-app.php"); ?>
  <!--- APP --->
  
  <!--- CALENDARIO --->
  <?php include("mod-calendario.php"); ?>
  <!--- CALENDARIO --->

  <!--- BANNER ---->
  <?php include("mod-baner.php"); ?>
  <!--- BANNER ---->

  <!--- NEWS --->
  <?php include("mod-noticias.php"); ?>
  <!--- NEWS --->

  <!--- Footer --->
  <?php include("footer.php"); ?>
  <!--- Footer --->

  <!--- WHATS FLOTANTE --->
    <?php include("whatsapp.php"); ?>
  <!--- WHATS FLOTANTE --->
</body>
</html>