<?php
$seccion = $_GET['cve'];
$query = "SELECT id FROM secciones WHERE dieciocho = '$seccion'";
$resultado = mysqli_query($conexion, $query);
$rowidsec = mysqli_fetch_array($resultado);
$idsec = $rowidsec['id'];
$renum = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='descargas' ");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>   
<div class="container">
<div class="row" style="padding:50px 20px 50px 20px; display:flex; justify-content:center; flex-wrap:wrap;">

    <div class="col-xs-12 col-sm-12 text-center"> 
        <!--- NOVE
        <h2 class="tipo-2 color-1 mayusculas"> Descargas </h2>
        NOVE --->
        <p style="height:5px;"></p>
    </div> 

    <?php
    $redesca = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo = 'descargas' AND estado = 'activo' ORDER BY acomodo ASC");
    while($rowdesca=mysqli_fetch_assoc($redesca)) { ?>

    <div class="col-xs-12 col-sm-<?php echo $rowdesca['ancho']; ?>" style="padding:10px;">
    <div class="text-center linkkk-sombra cccontorno fondo-blanco" style="padding:10px;">
        <a href="<?php echo $rowdesca['link'];?>" target="_blanck">
        <img src="modulos/<?php echo $rowdesca['f1']; ?>" class="zoommm" style="object-fit:contain; width:100%; height:<?php echo $rowdesca['alto']; ?>px;  border-radius:2px;">
        </a>
        <div style="padding:20px 30px 20px 30px; height:100px;">
            <h4 class="tipo-2 mayusculas"> <?php echo $rowdesca['titulo'];?> </h4>
            <p stile="height:10px;"></p>
            <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
            <p stile="height:10px;"></p>
            <a href="<?php echo $rowdesca['link'];?>" target="_blanck">
            <p class="link tipo-2 mayusculas"> descargar </p>
            </a>
        </div>
    </div>
    </div>

    <?php } ?> 

</div>  
</div>
<?php } ?> 