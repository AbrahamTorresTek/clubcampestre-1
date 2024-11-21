<?php
$seccion = $_GET['cve']; 
$renum = mysqli_query($conexion,"SELECT * FROM secciones WHERE dieciocho ='$seccion' AND quince ='si' ORDER BY id");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>

<?php $refolo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-nosotros'"); 
$rowfolo = mysqli_fetch_array($refolo);?>
<div style="background-image: url(imagenes/<?php echo $rowfolo['foto'];?>);
background-position: center center;
background-repeat: repeat-x;
">
<div class="container" style="padding:50px 0px 0px 0px;"> 
<div class="row">

    <div class="col-xs-12  col-sm-3 col-sm-offset-2 text-center" style="padding:40px; height:400px;"> 
        <h3 class="tipo-2 color-1">Reservaciones por medio de la APP Campestre de León </h3>
        <p style="height:30px"></p>  
        <a class="" href="https://apps.apple.com/mx/app/campestre-de-le%C3%B3n/id1463002149" target="_blanck">
        <img src="imagenes/app-mac.png" class="zoom" style="object-fit:cover; width:200px; height:50px;  border-radius:10px;">
        </a>
        <p style="height:10px"></p>  
        <a class="" href="https://play.google.com/store/apps/details?id=club.episodio.leon" target="_blanck">
        <img src="imagenes/app-android.png" class="zoom" style="object-fit:cover; width:200px; height:50px;  border-radius:10px;">
        </a>
    </div>

    <div class="col-xs-12  col-sm-5 text-center" style="padding:0px;">
            <img src="imagenes/app.png" class="" height="400px" ssstyle="object-fit:cover; width:100%; height:400px;  border-radius:0px;">
    </div>   

</div>
</div>
</div>
<?php } ?> 