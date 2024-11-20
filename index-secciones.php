<?php $refofo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='footer-fondo'"); 
$rowfofo = mysqli_fetch_array($refofo);?>
<div style=" background-image: url(imagenes/<?php echo $rowfofo['foto'];?>);
background-position: center center;
background-repeat: repeat; ">
<div class="container" style="padding:100px 0px 100px 0px;">
<div class="row">

  <div class="col-xs-12 text-center"> 
  <h2 class="tipo-2 color-1 mayusculas">Descubrá un lugar</h2>
  <p style="height:10px"></p>  
  </div>  

  <?php $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND doce ='promocion' AND trece ='espanol'  order by id ASC");
  while($row=mysqli_fetch_assoc($re)) { ?>
  <div class="col-xs-12  col-sm-<?php echo $row['nueve']; ?> text-center"  style="padding:40px;"> 
    <div class="link-sombra fondo-blanco contorno" style="padding:0px; border-radius:0px;"> 
      <a href="<?php echo $row['seis'];?>">
      <img src="secciones/<?php echo $row['f1']; ?>" class="" style="object-fit:cover; width:100%; height:500px;  border-radius:0px;">
      </a>
      <p style="height:15px"></p>  
      <h3 class="tipo-2 color-1"><?php echo $row['uno']; ?></h3>
      <p style="height:10px"></p>  
      <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
        <div style="padding:20px; height:100px; bbackground-color:red;">  
        <p class="text-center tipo"><?php $des = substr($row['descripcion'], 0, 100);
                                            echo $des; ?>...</p>
        </div>  
      <a href="<?php echo $row['seis'];?>">
      <p class="link tipo-2 mayusculas"> VER MÁS </p>
      </a>
      <p style="height:15px"></p>  
    </div>
  </div> 
  <? } ?> 

</div>   
</div>
</div> 
