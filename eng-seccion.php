<?php include("cabecera.php"); ?>
<body topmargin="0">

<header><!--- HEADER --->

  <!--- LOGO --->
    <?php include("eng-logo.php"); ?>
  <!--- LOGO --->

  <!--- POP --->
<?php include("eng-mod-pop.php"); ?>
<!--- POP --->

<div class="sigue"><!--- SIGUE --->
    <!--- MENU --->
    <?php include("eng-menu.php"); ?>
  <!--- MENU --->
  </div><!--- TERMINA SIGUE --->

  <!--- IMG SUPERIOR ---->
  <div class="" style="position:relative; top:0px; left:0px; height:300px; width:100%;">

    <div class="" style="position:absolute; top:0px; left:0px; height:300px; width:100%; z-index:-1">
      <?php $clave = $_GET['cve']; $resec = mysqli_query($conexion,"SELECT * FROM secciones WHERE dieciocho ='$clave' LIMIT 1");
      $rowsec = mysqli_fetch_array($resec); ?>
      <img src="secciones/<?php echo $rowsec['f2'];?>" alt="<?php echo $row['siete'];?>" width="100%" style="object-fit:cover; height:300px;  border-radius:0px;">
    </div> 
    <div class="decoracion-fondo-top" style="position:absolute; bottom:0px; left:0px; height:200px; width:100%; z-index:2">
      <div class="text-center" style="padding-top:140px;">
        <h1 class="tipo-2 color-blanco sombra-texto"><?php echo $rowsec['uno'];?></h1>
      </div> 
    </div> 

  </div> 


  <?php $altow = $rowsec['once']; if ($altow == 'null' or $altow == '' or $altow == NULL) { ?>                                       
  <?php } else { ?>                                        
  <!--- INFORMACION --->
    <?php $clave = $_GET['cve']; $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE dieciocho ='$clave' LIMIT 1");
    while($row=mysqli_fetch_assoc($re)) { 
    $id = $row['id'];?>
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">

        <!--- ESCRITORIO --->
        <div class="ocultar-movil" style="padding:0px 0px 0px 0px;">
          <div class="" style="position:relative; top:0px; left:0px; height:<?php echo $row['once'];?>px; width:100%;">

                <div class="" style="position:absolute; top:0px; left:0%; height:<?php echo $row['once'];?>px; width:55%; z-index:1">
                  <img src="secciones/<?php echo $row['f3'];?>" alt="<?php echo $row['siete'];?>" width="100%" style="object-fit:cover; height:<?php echo $row['once'];?>px;  border-radius:1px;">                                
                </div>

                <div class="" style="position:absolute; top:0px; right:5%; height:<?php echo $row['once'];?>px; width:45%; z-index:2">
                  <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="<?php echo $row['once'];?>px" align="center" valign="middle">
                  <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $row['siete'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $row['ocho']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $row['ocho'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"><?php echo $row['descripcion'];?> </p>
                  </div>
                  </td></tr></table>
                </div>

          </div>  
        </div>

        <!--- MOVIL --->
        <div class="mostrar-movil" style="padding:30px;">  
          <div class="col-xs-12 text-center fondo-1 sombra contorno-color-3"  style="padding:0px;"> 
            <img src="secciones/<?php echo $row['f3'];?>" alt="<?php echo $row['siete'];?>" width="100%" class="" style="object-fit:cover; height:<?php echo $row['once'];?>px;  border-radius:1px;">                                
              <div class="text-center"  style="padding:30px;"> 
              <h2 class="tipo-2 mayusculas"> <?php echo $row['siete'];?> </h2>
              <p style="height:5px;"></p>
                    <h4 class="tipo-2 mayusculas"> <?php echo $row['ocho'];?> </h4>
                    <p style="height:5px;"></p>
              <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
              <p style="height:10px;"></p>
              <p class="text-center tipo"><?php echo $row['descripcion'];?> </p>
              </div>
          </div> 
        </div> 

      </div>
      </div>
      <? } ?> 
  <!--- INFORMACION --->
  <?php } ?>

  <!--- INFO 2 --->
  <?php include("eng-mod-info.php"); ?>
  <!--- INFO 2 --->
  
  <!--- SOCIALES --->
  <?php include("eng-mod-sociales.php"); ?>
  <!--- SOCIALES --->

  <!--- AMENIDADES --->
  <?php include("eng-mod-amenidades.php"); ?>
  <!--- AMENIDADES --->

  <!--- DESCARGAS --->
  <?php include("eng-mod-descargas.php"); ?>
  <!--- DESCARGAS --->

  <!--- APP --->
    <?php include("eng-mod-app.php"); ?>
  <!--- APP --->

  <!--- CALENDARIO --->
    <?php include("eng-mod-calendario.php"); ?>
  <!--- CALENDARIO --->

</header><!--- CIERRE HEADER --->
  
  <!--- BANNER ---->
  <?php include("mod-baner.php"); ?>
  <!--- BANNER ---->

  <!--- NEWS --->
  <?php include("eng-mod-noticias.php"); ?>
  <!--- NEWS --->

  <!--- Footer --->
  <?php include("eng-footer.php"); ?>
  <!--- Footer --->

  <!--- WHATS FLOTANTE --->
    <?php include("whatsapp.php"); ?>
  <!--- WHATS FLOTANTE --->
</body>
</html>