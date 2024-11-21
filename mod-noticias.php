<?php
$seccion = $_GET['cve']; 
$renum = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND cuatro ='$seccion' AND doce ='espanol' AND tres ='destacado' order by id DESC");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>

<?php $renews = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-nosotros'"); 
$rownews = mysqli_fetch_array($renews);?>
<div class="fondo-4">
<div class="container">
<div class="row" style="padding:100px 20px 100px 20px;display: flex; justify-content: center; flex-wrap: wrap;">

    <div class="col-xs-12 col-sm-12 text-center"> 
        <h2 class="tipo-2 color-2 mayusculas"> Noticias Actividades y Eventos </h2>
        <p style="height:20px;"></p>
    </div> 

    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND cuatro ='$seccion' AND doce ='espanol' AND tres ='destacado' order by id DESC");
    while($rowdes=mysqli_fetch_assoc($redes)) { ?>
   
    <div class="col-xs-12 col-sm-4" style="padding:10px;">
    <div class="text-center link-sombra contorno fondo-blanco"  style="padding:10px;">
        <a href="eng-blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
        <img src="blog/<?php echo $rowdes['f1']; ?>" class="" style="object-fit:contain; width:100%; height:350px;  border-radius:2px;">
        </a>
        <div style="padding:20px 30px 20px 30px; height:200px;">
            <h4 class="tipo-2 mayusculas"> <?php echo $rowdes['uno'];?> </h4>
            <p stile="height:10px;"></p>
            <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
            <p stile="height:10px;"></p>
            <p class="text-center tipo"><?php $desdes = substr($rowdes['descripcion'], 0, 100);
                                                echo $desdes; ?>...</p>
            <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
            <p class="link tipo-2 mayusculas"> MORE INFORMATION </p>
            </a>
        </div>
    </div>
    </div>
    
    <?php } ?>

</div>  
</div>  
</div>  
<?php } ?>