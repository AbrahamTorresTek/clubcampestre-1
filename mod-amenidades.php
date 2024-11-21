<?php
$seccion = $_GET['cve'];
$query = "SELECT id FROM secciones WHERE dieciocho = '$seccion'";
$resultado = mysqli_query($conexion, $query);
$rowidsec = mysqli_fetch_array($resultado);
$idsec = $rowidsec['id'];
$renum = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='amenidades' ");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>

<?php $renews = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-amenidades'"); 
$rownews = mysqli_fetch_array($renews);?>
<div style="background-image: url(imagenes/<?php echo $rownews['foto'];?>);
background-position: center center;
background-repeat: repeat;
">
<div class="container">
<div class="row" style="padding:50px 20px 50px 20px; display: flex; justify-content: center; flex-wrap: wrap;">

    <div class="col-xs-12" style="background-image: url(imagenes/sombra-top.png);
    background-position:top center;
    background-repeat: no-repeat;
    height:50px;
    "></div> 

    <?php $re = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='amenidades' ");
    while($row=mysqli_fetch_assoc($re)) { ?>

    <div class="col-xs-12 col-sm-<?php echo $row['ancho']; ?>" style="padding:10px;">
    <div class="text-center link-sombra contorno-color-4" style="border-radius:3px; padding:15px;">
        <img src="modulos/<?php echo $row['f1']; ?>" class="" style="object-fit:contain; width:100%; height:<?php echo $row['alto']; ?>px;">
        <div style="padding:10px 20px 0px 20px;">
                <h2 class="tipo-2 mayusculas color-3"> <?php echo $row['titulo'];?> </h2>
                    <p style="height:2px;"></p>
                    <?php $vacioa = $row['subtitulo']; if ($vacioa == 'null' or $vacioa == '' or $vacioa == NULL) { } else { ?>                                        
                      <h4 class="tipo-2 mayusculas"> <?php echo $row['subtitulo'];?> </h4>
                      <p style="height:5px;"></p>
                    <?php } ?>
            <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
            <p stile="height:10px;"></p>
            <p class="text-center tipo"><?php echo $row['descripcion'];?></p>
        </div>
    </div>
    </div>
    
    <?php } ?>

    <div class="col-xs-12" style="background-image: url(imagenes/sombra-back.png);
    background-position:bottom center;
    background-repeat: no-repeat;
    height:50px;
    "></div> 

</div>  
</div>  
</div>  
<?php } ?>

