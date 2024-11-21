<?php
$seccion = $_GET['cve'];
$query = "SELECT id FROM secciones WHERE dieciocho = '$seccion'";
$resultado = mysqli_query($conexion, $query);
$rowidsec = mysqli_fetch_array($resultado);
$idsec = $rowidsec['id'];
$renum = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo'");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>



<!--- ESCRITORIO --->

<!--- MODULO 1 --->
<?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo' AND acomodo='1'");
while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">
        <div class="ocultar-movil" style="">
          <div class="" style="position:relative; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:100%;">

                <div class="" style="position:absolute; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:55%; z-index:1">
                  <img src="modulos/<?php echo $rowinfo['f1'];?>" alt="<?php echo $rowinfo['titulo'];?>" width="100%" style="object-fit:cover; height:<?php echo $rowinfo['alto'];?>px;  border-radius:1px;" class="block" data-move-x="50px">                            
                </div>

                <div class="" style="position:absolute; top:0px; left:10%;  height:<?php echo $rowagre['alto'];?>px; width:45%; z-index:2">
                  <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="<?php echo $rowinfo['alto'];?>px" align="center" valign="middle">
                  <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $rowinfo['titulo'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $rowinfo['subtitulo']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $rowinfo['subtitulo'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"> <?php echo $rowinfo['descripcion'];?> </p>
                  </div>
                  </td></tr></table>
                </div>

          </div>  
        </div>
      </div>
      </div>
<?php } ?>      
<!--- MODULO 1 --->

<!--- MODULO 2 --->
<?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo' AND acomodo='2'");
while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">
        <div class="ocultar-movil" style="">
          <div class="" style="position:relative; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:100%;">

          <div class="" style="position:absolute; top:0px; left:0%; height:<?php echo $row['once'];?>px; width:55%; z-index:1">
                  <img src="modulos/<?php echo $rowinfo['f1'];?>" alt="<?php echo $rowinfo['titulo'];?>" width="100%" style="object-fit:cover; height:<?php echo $rowinfo['alto'];?>px;  border-radius:1px;" class="block" data-move-x="-50px">                            
                </div>

                <div class="" style="position:absolute; top:0px; right:5%; height:<?php echo $row['once'];?>px; width:45%; z-index:2">
                  <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="<?php echo $rowinfo['alto'];?>px" align="center" valign="middle">
                  <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $rowinfo['titulo'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $rowinfo['subtitulo']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $rowinfo['subtitulo'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"> <?php echo $rowinfo['descripcion'];?> </p>
                  </div>
                  </td></tr></table>
                </div>

          </div>  
        </div>
      </div>
      </div>
<?php } ?>      
<!--- MODULO 2 --->

<!--- MODULO 3 --->
<?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo' AND acomodo='3'");
while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">
        <div class="ocultar-movil" style="">
          <div class="" style="position:relative; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:100%;">

                <div class="" style="position:absolute; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:55%; z-index:1">
                  <img src="modulos/<?php echo $rowinfo['f1'];?>" alt="<?php echo $rowinfo['titulo'];?>" width="100%" style="object-fit:cover; height:<?php echo $rowinfo['alto'];?>px;  border-radius:1px;" class="block" data-move-x="50px">                            
                </div>

                <div class="" style="position:absolute; top:0px; left:10%;  height:<?php echo $rowagre['alto'];?>px; width:45%; z-index:2">
                  <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="<?php echo $rowinfo['alto'];?>px" align="center" valign="middle">
                  <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $rowinfo['titulo'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $rowinfo['subtitulo']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $rowinfo['subtitulo'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"> <?php echo $rowinfo['descripcion'];?> </p>
                  </div>
                  </td></tr></table>
                </div>

          </div>  
        </div>
      </div>
      </div>
<?php } ?>      
<!--- MODULO 3 --->

<!--- MODULO 4 --->
<?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo' AND acomodo='4'");
while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="container" style="padding:50px 0px 50px 0px;">
      <div class="row">
        <div class="ocultar-movil" style="">
          <div class="" style="position:relative; top:0px; right:0%; height:<?php echo $rowinfo['alto'];?>px; width:100%;">

          <div class="" style="position:absolute; top:0px; left:0%; height:<?php echo $row['once'];?>px; width:55%; z-index:1">
                  <img src="modulos/<?php echo $rowinfo['f1'];?>" alt="<?php echo $rowinfo['titulo'];?>" width="100%" style="object-fit:cover; height:<?php echo $rowinfo['alto'];?>px;  border-radius:1px;" class="block" data-move-x="-50px">                            
                </div>

                <div class="" style="position:absolute; top:0px; right:5%; height:<?php echo $row['once'];?>px; width:45%; z-index:2">
                  <table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="<?php echo $rowinfo['alto'];?>px" align="center" valign="middle">
                  <div class="fondo-1 sombra contorno-color-3" style="padding:50px 50px 50px 50px;">
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $rowinfo['titulo'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $rowinfo['subtitulo']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $rowinfo['subtitulo'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"> <?php echo $rowinfo['descripcion'];?> </p>
                  </div>
                  </td></tr></table>
                </div>

          </div>  
        </div>
      </div>
      </div>
<?php } ?>      
<!--- MODULO 4 --->


<!--- MOVIL --->
<?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='info2' AND estado='activo' ORDER BY acomodo");
while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="container mostrar-movil" style="padding:50px 0px 50px 0px;">
      <div class="row">

        <div class="mostrar-movil" style="padding:0px 30px 0px 30px;">  
          <div class="col-xs-12 text-center fondo-1 sombra contorno-color-3"  style="padding:0px;"> 
                <img src="modulos/<?php echo $rowinfo['f1'];?>" alt="<?php echo $rowinfo['titulo'];?>" width="100%" style="object-fit:cover; height:<?php echo $rowinfo['alto'];?>px;  border-radius:1px;">    
                <div class="" style="padding:30px">                      
                    <h2 class="tipo-2 mayusculas color-3"> <?php echo $rowinfo['titulo'];?> </h2>
                    <p style="height:5px;"></p>
                    <?php $vacio = $rowinfo['subtitulo']; if ($vacio == 'null' or $vacio == '' or $vacio == NULL) { } else { ?>                                        
                    <h4 class="tipo-2 mayusculas"> <?php echo $rowinfo['subtitulo'];?> </h4>
                        <p style="height:5px;"></p>
                    <?php } ?>
                    <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                    <p style="height:10px;"></p>
                    <p class="text-center tipo"> <?php echo $rowinfo['descripcion'];?> </p>
                </div>
              </div>
          </div> 
        </div> 

      </div>
      </div>
<?php } ?>    


<?php } ?>