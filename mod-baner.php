<?php
$seccion = $_GET['cve'];
$query = "SELECT id FROM secciones WHERE dieciocho = '$seccion'";
$resultado = mysqli_query($conexion, $query);
$rowidsec = mysqli_fetch_array($resultado);
$idsec = $rowidsec['id'];
$renum = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='galeria' ");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>

    <!-- ESCRITORIO -->
    <div class="fondo-3 ocultar-movil" style="position:relative; top:0px; left:0px; height:500px; width:100%;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-indicators">

        <div data-target="#myCarousel" data-slide-to="0" class="active">  </div>
            <?php $reba = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='escritorio' ");
            while($rowba=mysqli_fetch_assoc($reba)) { ?>
            <div data-target="#myCarousel" data-slide-to="1">  </div>
            <?php } ?> 
        </div> 

        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
                  
                <!-- Slides-->
                <?php $reba = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='escritorio' LIMIT 1 ");
                while($rowba=mysqli_fetch_assoc($reba)) { ?>
                  <div class="item active">
                  <img src="modulos/<?php echo $rowba['f1']; ?>" class="" style="object-fit:cover; width:100%; height:<?php echo $rowba['alto']; ?>px; ">
                  </div>
                <?php } ?>
  
                <?php $reba = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='escritorio'  LIMIT 100 OFFSET 1 ");
                while($rowba=mysqli_fetch_assoc($reba)) { ?>
                  <div class="item">
                  <img src="modulos/<?php echo $rowba['f1']; ?>" class="" style="object-fit:cover; width:100%; height:<?php echo $rowba['alto']; ?>px; ">
                  </div>
                  <?php } ?>
              <!-- Slides-->

              <!-- Controles -->
              <div class="text-center" style="position:absolute; width:70px; height:70px;  top:10px; right:10px; z-index:2; padding:10px;">
              <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                  <a href="#myCarousel" role="button" data-slide="next">
                      <img src="svg/derecha.svg" style="height:30px;">
                  </a>
              </div>
              </div>
              <div class="text-center" style="position:absolute; width:70px; height:70px; bottom:10px; left:10px; z-index:2; padding:10px;">
              <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                  <a href="#myCarousel" role="button" data-slide="prev">
                      <img src="svg/izquierda.svg" style="height:30px;">
                  </a>
              </div>
              </div>

        </div>

    </div> 
    </div> 
    </div> 






    <!-- MOBIL -->
    <div class="fondo-3 mostrar-movil" style="position:relative; top:0px; left:0px; height:500px; width:100%;">
    <div id="myCarouselmm" class="carousel slide" data-ride="carousel">
    <div class="carousel-indicators">

        <div data-target="#myCarouselmm" data-slide-to="0" class="active">  </div>
            <?php $re = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='celular' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
            <div data-target="#myCarouselmm" data-slide-to="1">  </div>
            <?php } ?> 
        </div> 

        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
                  
                <!-- Slides-->
                <?php $re = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='celular' LIMIT 1 ");
                while($row=mysqli_fetch_assoc($re)) { ?>
                  <div class="item active">
                  <img src="modulos/<?php echo $row['f1']; ?>" class="" style="object-fit:cover; width:100%; height:<?php echo $row['alto']; ?>px; ">
                  </div>
                <?php } ?>
  
                <?php $re = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo ='galeria' AND tipo ='celular' LIMIT 100 OFFSET 1");
                while($row=mysqli_fetch_assoc($re)) { ?>
                  <div class="item">
                  <img src="modulos/<?php echo $row['f1']; ?>" class="" style="object-fit:cover; width:100%; height:<?php echo $row['alto']; ?>px; ">
                  </div>
                <?php } ?>
              <!-- Slides-->

              <!-- Controles -->
              <div class="text-center" style="position:absolute; width:70px; height:70px;  top:10px; right:10px; z-index:2; padding:10px;">
              <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                  <a href="#myCarouselmm" role="button" data-slide="next">
                      <img src="svg/derecha.svg" style="height:30px;">
                  </a>
              </div>
              </div>
              <div class="text-center" style="position:absolute; width:70px; height:70px; bottom:10px; left:10px; z-index:2; padding:10px;">
              <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                  <a href="#myCarouselmm" role="button" data-slide="prev">
                      <img src="svg/izquierda.svg" style="height:30px;">
                  </a>
              </div>
              </div>

        </div>

    </div> 
    </div> 
    </div> 

<?php } ?> 