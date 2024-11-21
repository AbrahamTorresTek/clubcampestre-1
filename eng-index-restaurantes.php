<!--- RESTAURANTES ---->
<div class="container" style="padding:60px 0px 60px 0px;"> 
<div class="row">

  <?php $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND dieciocho ='eng-aranciata' AND trece ='ingles' order by id ASC");
  while($row=mysqli_fetch_assoc($re)) { ?>
  <div class="col-xs-12  col-sm-4 col-sm-offset-2 text-center"  style="padding:40px;"> 
    <a href="eng-<?php echo $row['seis'];?>">
    <div class="link-sombra fondo-blanco contorno" style="padding:0px; border-radius:0px;"> 
      <img src="secciones/<?php echo $row['f1']; ?>" class="" width="100%" style="object-fit:cover; width:100%; height:450px;  border-radius:0px;">
      <p style="height:15px"></p>  
      <h3 class="tipo-2 color-1"><?php echo $row['uno']; ?></h3>
      <div style="padding:20px">  
      <p class="text-justify tipo"><?php $des = substr($row['descripcion'], 0, 200);
                                          echo $des; ?>...</p>
      </div>  
    </div>
    </a>
  </div> 
  <?php } ?> 

  <?php $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND dieciocho ='eng-hoyo-19' AND trece ='ingles' order by id ASC");
  while($row=mysqli_fetch_assoc($re)) { ?>
  <div class="col-xs-12  col-sm-4 text-center" style="padding:40px;"> 
    <a href="eng-<?php echo $row['seis'];?>">
    <div class="link-sombra fondo-blanco contorno" style="padding:0px; border-radius:0px;"> 
      <p style="height:15px"></p>  
      <h3 class="tipo-2 color-1"><?php echo $row['uno']; ?></h3>
      <div style="padding:20px">  
      <p class="text-justify tipo"><?php $des = substr($row['descripcion'], 0, 200);
                                          echo $des; ?>...</p>
      </div>  
      <img src="secciones/<?php echo $row['f1']; ?>" class="" width="100%" style="object-fit:cover; width:100%; height:450px;  border-radius:0px;">
    </div>
    </a>
  </div> 
  <?php } ?> 

</div>   
</div> 
