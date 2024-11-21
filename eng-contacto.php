<?php include("cabecera.php"); ?>
    <body topmargin="0" onLoad="MM_preloadImages('imagenes/top-1.png')">
    <!--- INFO TOP --->
    <?php //include("linea-top-NOVE.php"); ?>
    <!--- INFO TOP --->
    <header><!--- HEADER --->
    <!--- LOGO --->
    <?php include("eng-logo.php"); ?>
    <!--- LOGO --->
    <div class="sigue"><!--- SIGUE --->
    <!--- MENU --->
    <?php include("eng-menu.php"); ?>
    <!--- MENU --->
    </div><!--- TERMINA SIGUE --->



  <!--- IMG SUPERIOR ---->
  <div class="" style="position:relative; top:0px; left:0px; height:300px; width:100%;">

    <div class="" style="position:absolute; top:0px; left:0px; height:300px; width:100%; z-index:-1">
    <?php $refoto = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='contacto-top'"); 
    $rowfoto = mysqli_fetch_array($refoto);?>
      <img src="imagenes/<?php echo $rowfoto['foto'];?>" alt="<?php echo $row['siete'];?>" width="100%" style="object-fit:cover; height:300px;  border-radius:0px;">
    </div> 
    <div class="decoracion-fondo-top" style="position:absolute; bottom:0px; left:0px; height:200px; width:100%; z-index:2">
      <div class="text-center" style="padding-top:140px;">
        <h1 class="tipo-2 color-blanco sombra-texto">CONTACT</h1>
      </div> 
    </div> 

  </div> 


<!--- INFORMACION --->
<?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal'");
while($row=mysqli_fetch_assoc($re)) { ?>

  <div class="container" style="padding:50px 0px 50px 0px;">
  <div class="row">

    <!--- ESCRITORIO --->
    <div class="ocultar-movil" style="padding:0px 0px 0px 0px;">
          <div class="" style="position:relative; top:0px; left:0px; height:600px; width:100%;">

            <div class="" style="position:absolute; top:0px; left:10%; height:600px; width:60%; z-index:1">
              <?php $refotocon = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='imagen-contacto'"); 
              $rowfotocon = mysqli_fetch_array($refotocon);?>
                <img src="imagenes/<?php echo $rowfotocon['foto'];?>" alt="club campestre" width="100%" style="object-fit:cover; height:600px;  border-radius:1px;">                                
            </div>

            <div class="" style="position:absolute; top:0px; right:10%; height:600px; width:40%; z-index:2">
                <table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td align="center"  height="600px"  valign="middle">

                <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                  <h3 class="icon-mail-mio color-3"></h3>
                  <div style="height:5px;"></div>
                  <h4 class="tipo color-3 tipo-2 mayusculas">E-mail:</h4>
                  <div style="height:3px;"></div>
                  <p class="tipo"><?php echo $row['email'];?></p>
                  <?php echo $row['correo2'];?>
                  <div style="height:15px;"></div>

                  <h3 class="icon-location color-3"></h3>
                  <div style="height:5px;"></div>
                  <h4 class="tipo color-3 tipo-2 mayusculas">Location:</h4>
                  <div style="height:3px;"></div>
                  <p class="tipo"><?php echo $row['direccion'];?></p>
                  <div style="height:15px;"></div>
                  
                  <h3 class="icon-phone color-3"></h3>
                  <div style="height:5px;"></div>
                  <h4 class="tipo color-3 tipo-2 mayusculas">Phone:</h4>
                  <div style="height:3px;"></div>
                  <p class="tipo"><?php echo $row['telefono'];?></p>
                  <p class="tipo"><?php echo $row['telefono2'];?></p>
                  <div style="height:15px;"></div>

                  <h3 class="icon-whatsapp color-3"></h3>
                  <div style="height:5px;"></div>
                  <h4 class="tipo color-3 tipo-2 mayusculas">WhatsApp:</h4>
                  <div style="height:3px;"></div>
                  <p class="tipo"><?php echo $row['whatsapp'];?></p>
                </div>

                </td></tr></table>
            </div>
          </div>

          <div class="" style="position:relative; top:100px; left:10%;  width:80%;">
              <div class="fondo-1 sombra contorno-color-3 grisesss" style="padding:20px">

              <div class="ocultar-movil">
              <?php $remapa = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='mapa'"); 
              $rowmapa = mysqli_fetch_array($remapa);?>
              <a href="<?php echo $row['mapa'];?>" target="_blanck">
              <img src="imagenes/<?php echo $rowmapa['foto'];?>" alt="mapa club campestre" width="100%">
              </a>
              </div>

              </div>
          </div>
    </div>

    <!--- MOVIL --->
    <div class="mostrar-movil" style="padding:30px;">  
      <div class="col-xs-12 text-center fondo-1 sombra contorno-color-3"  style="padding:20px;"> 

          <img src="imagenes/<?php echo $rowfotocon['foto'];?>" alt="club campestre" width="100%" style="object-fit:cover; height:300px;  border-radius:1px;">
  
            <p style="height:20px;"></p>

            <h3 class="icon-mail-mio color-3"></h3>
            <div style="height:5px;"></div>
            <h4 class="tipo color-3 tipo-2 mayusculas">E-mail:</h4>
            <p class="tipo"><?php echo $row['email'];?><br>
            <?php echo $row['correo2'];?></p>

            <p style="height:20px;"></p>

            <h3 class="icon-location color-3"></h3>
            <div style="height:5px;"></div>
            <h4 class="tipo color-3 tipo-2 mayusculas">Location:</h4>
            <p class="tipo"><?php echo $row['direccion'];?></p>

            <p style="height:20px;"></p>

            <h3 class="icon-phone color-3"></h3>
            <div style="height:5px;"></div>
            <h4 class="tipo color-3 tipo-2 mayusculas">Phone:</h4>
            <p class="tipo"><?php echo $row['telefono'];?><br>
            <?php echo $row['telefono2'];?></p>

            <p style="height:20px;"></p>

            <h3 class="icon-whatsapp color-3"></h3>
            <div style="height:5px;"></div>
            <h4 class="tipo color-3 tipo-2 mayusculas">WhatsApp:</h4>
            <p class="tipo"><?php echo $row['whatsapp'];?></p>

            <p style="height:20px;"></p>

            <?php $remapam = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='mapa-movil'"); 
            $rowmapam = mysqli_fetch_array($remapam);?>
            <a href="<?php echo $row['mapa'];?>">
            <img src="imagenes/<?php echo $rowmapam['foto'];?>" alt="mapa club campestre" width="100%">
            </a>
      </div> 
    </div> 

  </div>
  </div>

<?php } ?> 
<!--- INFORMACION --->





<div style="height:100px"></div> 

</header><!--- CIERRE HEADER --->


<!--- Footer --->
<?php include("eng-footer.php"); ?>
<!--- Footer --->

