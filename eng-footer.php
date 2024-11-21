<?php $refofo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='footer-fondo'"); 
$rowfofo = mysqli_fetch_array($refofo);?>
<div style=" background-image: url(imagenes/<?php echo $rowfofo['foto'];?>);
background-position: center center;
background-repeat: repeat; ">
<?php $refotop = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='footer-top'"); 
$rowfotop = mysqli_fetch_array($refotop);?>
<div style=" background-image: url(imagenes/<?php echo $rowfotop['foto'];?>);
background-position: top center;
background-repeat: no-repeat; ">
<div class="container">
<div class="row">

      <!--- LOGO --->
            <div class=" col-xs-12  col-sm-4  col-sm-offset-4  text-center " style="padding:30px;">
                  <?php $relogo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='logotipo-abajo' "); 
                  $rowlogo = mysqli_fetch_array($relogo);?>
                  <img src="imagenes/<?php echo $rowlogo['foto'];?>" width="50%"/>
            </div>
      <!--- LOGO --->

            <div class=" col-xs-12 ">
            <div class="row" style=" background-image: url(imagenes/<?php echo $rowfotop['foto'];?>);
                  background-position: top center;
                  background-repeat: no-repeat; padding:50px 0px 50px 0px ;">

            <div class=" col-xs-12  col-sm-1 text-center ocultar-movil">
            <img src="imagenes/bandera.png" width="90%"/>
            </div>

            <div class=" col-xs-12  col-sm-2  text-center">
                  <h4 class="tipo-2 color "> GOLF</h4>
                  <p style="height:10px;"></p>
                  <?php $catsec = $rowcatt['dieciocho'];
                  $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='golf'  AND trece ='ingles' order by id");
                  while ($row = mysqli_fetch_assoc($re)) { ?>
                       <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                  <?php } ?>
                  <p style="height:20px;"></p>
            </div>
            <div class=" col-xs-12  col-sm-2  text-center">
                  <h4 class="tipo-2 color ">CLUB HOUSE</h4>
                  <p style="height:10px;"></p>
                  <?php $catsec = $rowcatt['dieciocho'];
                  $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='casa-club'  AND trece ='ingles' order by id");
                  while ($row = mysqli_fetch_assoc($re)) { ?>
                        <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                  <?php } ?>
                  <p style="height:20px;"></p>
            </div>
            <div class=" col-xs-12  col-sm-2 text-center">
                  <h4 class="tipo-2 color "> RESTAURANTS </h4>
                  <p style="height:10px;"></p>
                  <?php $catsec = $rowcatt['dieciocho'];
                  $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='restaurants'  AND trece ='ingles' order by id");
                  while ($row = mysqli_fetch_assoc($re)) { ?>
                       <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                  <?php } ?>
                  <p style="height:20px;"></p>
            </div>
            <div class=" col-xs-12  col-sm-2 text-center">
                  <h4 class="tipo-2 color "> SOCIAL </h4>
                  <p style="height:10px;"></p>
                  <?php $catsec = $rowcatt['dieciocho'];
                  $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='sociales'  AND trece ='ingles' order by id");
                  while ($row = mysqli_fetch_assoc($re)) { ?>
                        <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                  <?php } ?>
                  <p style="height:20px;"></p>
            </div>
            <div class=" col-xs-12  col-sm-2 text-center">
                  <h4 class="tipo-2 color "> SECTIONS </h4>
                  <p style="height:10px;"></p>

                        <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_izquierdo' AND cinco='editable' AND dos ='activo' AND trece ='ingles' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                        <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                        <?php } ?>
                        <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_derecho' AND cinco='editable' AND dos ='activo' AND trece ='ingles' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                        <a href="eng-<?php echo $row['seis']; ?>" class="link">
                        <p class="tipo-2" style="padding:0px;"><?php echo $row['uno']; ?> </p>
                        </a>
                        <?php } ?>
                        <a href="eng-contacto.php" class="link">
                        <p class="tipo-2" style="padding:0px;"> CONTACT </p>
                        </a>
                        
                        <a href="index.php" class="link">
                        <p class="tipo-2" style="padding:0px;"> ESPAÑOL</p>
                        </a>
                        <a href="ingles.php" class="link">
                        <p class="tipo-2" style="padding:0px;"> ENGLISH </p>
                        </a>
                        <a href="japones.php" class="link">
                        <p class="tipo-2" style="padding:0px;"> 日本 </p>
                        </a>
                       
            </div>

            <div class=" col-xs-12"> <p style="height:30px;"></p> </div>

      </div>
      </div>

</div>
</div>
</div>
</div>

<?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal'");
while($row=mysqli_fetch_assoc($re)) { ?>
<!-------------------- ABAJO ---------------------->

<!--- REDES
<div class=" text-center" style="padding:50px 0px 0px 0px;">
            <a href="#top"><p class="icon-top texto-grande "></p></a>
            <p style="height:30px;"></p>
            
            <h4 class="tipo">Síguenos</h4>
            <p></p>
            <h2>
            <?php $rere = mysqli_query($conexion,"SELECT * FROM redes WHERE Estado ='Activo' order by Id");
            while($rowre=mysqli_fetch_assoc($rere)) { ?>
                  <a href="<?php echo $rowre['Link'];?>" target="_blank" class="">
                  &nbsp;<spam class="text-center"><?php echo $rowre['Foto'];?></spam>&nbsp;
                  </a>
            <?php } ?>
            </h2>
            
      </div>
                 

                  <div class="col-xs-12 "></div> 

                  <div class=" col-xs-12  col-sm-4 text-center ocultar-movil">
                  <img src="imagenes/footer.png" width="100%"/>
                  </div>

                  

                  <div class=" col-xs-12  col-sm-4 text-center" style="padding:20px;"> 
                  <div class=" grises fondo-negro" style="padding:15px; border:solid 1px grey; border-radius:20px;">
                        <?php echo $row['mapa'];?>
                  </div>
                  </div>

            
                  
            </div>
      </div>

<?php } ?>
ABAJO ---------------------->

<!---------------- FINAl ---------------->
<section class="copy fondo-3">
	<div class="container">
            <div class=" col-xs-12  col-sm-12  col-md-12  text-center "> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal' order by id");
            while($row=mysqli_fetch_assoc($re)) { ?>
            <p class="tipo-2 ocultar-movil mayusculas">
                  © LEON COUNTRY CLUB <span class="color-4"> | </span> <?php echo $row['web'];?> <span class="color-4"> | </span> ALL RIGHTS RESERVED
            </p>
            <p class="tipo-2 mostrar-movil mayusculas">
                  © LEON COUNTRY CLUB <span class="color-4"> | </span> ALL RIGHTS RESERVED
            </p>
            <?php } ?>
            </div>
	</div> 
</section>    
<!--------------- FINAl --------------->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.smoove.js"></script>
<script>$('.block').smoove({offset:'40%'});</script>

<script>
$(document).ready(function(){
    $('#exampleModal').one('shown.bs.modal', function() {
        $(this).find('.modal-dialog').css({
            transform: 'scale(1.1)',
            transition: 'transform 0.5s'
        });

        setTimeout(function() {
            $('#exampleModal').find('.modal-dialog').css({
                transform: 'scale(1)',
                transition: 'transform 0.5s'
            });
        }, 1000);
    }).modal('show');
});

</script>