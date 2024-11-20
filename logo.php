<!--- LOGO --->
<div class="fondo-1">
<?php $refolo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-logo'"); 
$rowfolo = mysqli_fetch_array($refolo);?>
<div style="
background-image: url(imagenes/<?php echo $rowfolo['foto'];?>);
background-position: bottom center;
background-repeat: no-repeat;
">
<div class="container">
<?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal'");
while($row=mysqli_fetch_assoc($re)) { ?>


    <div class=" col-xs-12  col-sm-4  col-md-4  text-left ocultar-movil tipo" style="padding:23px 0px 0px 0px;">    
        <?php $rered = mysqli_query($conexion,"SELECT * FROM redes WHERE Estado ='Activo' order by Id");
        while($rowred=mysqli_fetch_assoc($rered)) { ?>
            <a href="<?php echo $rowred['Link'];?>" target="_blank" class="">
                <spam class="" style="font-size:14px;"><?php echo $rowred['Foto'];?><spam>
            </a> 
        <? } ?>   
        <spam class="tipo-2 " style="font-size:14px;">SIGUENOS</spam>
    </div>

    <div class="col-xs-12  col-sm-4  col-md-4  text-center" style="padding:5px;">
        <?php $relo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='logotipo'"); 
        $rowlo = mysqli_fetch_array($relo);?>
        <a href="index.php"><img src="imagenes/<?php echo $rowlo['foto'];?>" height="50px" /></a>
    </div>
    
    <div class=" col-xs-12  col-sm-4  col-md-4  text-right ocultar-movil tipo" style="padding:23px 0px 0px 0px;">
        <p class="tipo-2" style="font-size:14px;">
        <?php echo $row["telefono"];?> <?php echo $row["telefonos"];?> <span class="icon-phone color-3"></span>
        </p>
    </div>

<? } ?>   
</div>
</div>
</div>



