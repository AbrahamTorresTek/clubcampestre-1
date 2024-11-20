<?php
$orgulloll = $_GET['cve']; 
if ($orgulloll == "orgullo-campestre") { ?>

<div class="container">
<div class="row" style="padding:50px 20px 50px 20px; display: flex; justify-content: center; flex-wrap: wrap;">

    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE nueve = 'orgullo' AND dos = 'activo' AND doce ='espanol'");
    while($rowdes=mysqli_fetch_assoc($redes)) { ?>

    <div class="col-xs-12 col-sm-4" style="padding:10px;">
    <div class="text-center link-sombra contorno fondo-blanco">
        <img src="blog/<?php echo $rowdes['f1']; ?>" class="" style="object-fit:cover; width:100%; height:350px;  border-radius:2px;">
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

    <div class="col-xs-12" style="height:50px;"></div> 

</div>  
</div>  
<?php } else {  } ?>


<?php
$orgullol = $_GET['cve']; 
if ($orgullol == "promociones") { ?>

<div class="container">
<div class="row" style="padding:50px 20px 50px 20px; display: flex; justify-content: center; flex-wrap: wrap;">

    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE nueve = 'promociones' AND dos = 'activo' AND doce ='espanol'");
    while($rowdes=mysqli_fetch_assoc($redes)) { ?>
    <div class="col-xs-12 col-sm-4" style="padding:10px;">
    <div class="text-center link-sombra contorno fondo-blanco" style="padding:10px;">
        <img src="blog/<?php echo $rowdes['f1']; ?>" class="" style="object-fit:contain; width:100%; height:350px;  border-radius:2px;">
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
    
    <? } ?>

    <div class="col-xs-12" style="height:50px;"></div> 

</div>  
</div>  

<?php } else {  } ?>
