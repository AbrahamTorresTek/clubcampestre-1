<!--- RESTAURANTES ---->
<div class="container" style="padding:60px 0px 60px 0px;"> 
<div class="row" style="display:flex; justify-content:center; flex-wrap:wrap;">


  <?php 
  $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND doce ='restaurant' order by id ASC");
  $alternar = true; // Variable de control para alternar el orden de imagen y texto
  while($row=mysqli_fetch_assoc($re)) { 
  ?>

    <div class="col-xs-12 col-sm-4 text-center" style="padding:40px;"> 
        <a href="<?php echo $row['seis'];?>">
            <div class="link-sombra fondo-blanco contorno" style="padding:0px; border-radius:0px;"> 
                <?php if($alternar) { // Si $alternar es true, mostrar la imagen primero ?>

                    <img src="secciones/<?php echo $row['f1']; ?>" class="" width="100%" style="object-fit:cover; width:100%; height:450px; border-radius:0px;">
                    <div style="padding:20px; height:200px;">  
                        <h3 class="tipo-2 color-1"><?php echo $row['uno']; ?></h3>
                        <p style="height:10px;"></p>
                        <p class="text-justify tipo"><?php $des = substr($row['descripcion'], 0, 200);
                        echo $des; ?>...</p>
                    </div>  

                <?php } else { // Si $alternar es false, mostrar el texto primero ?>

                    <div style="padding:20px; height:200px;">  
                      <h3 class="tipo-2 color-1"><?php echo $row['uno']; ?></h3>
                      <p style="height:10px;"></p>
                      <p class="text-justify tipo"><?php $des = substr($row['descripcion'], 0, 200);
                      echo $des; ?>...</p>
                    </div>  
                    <img src="secciones/<?php echo $row['f1']; ?>" class="" width="100%" style="object-fit:cover; width:100%; height:450px; border-radius:0px;">

                <?php } ?>
            </div>
        </a>
    </div> 

  <?php 
  // Cambiar el valor de $alternar para la próxima iteración
  $alternar = !$alternar; } ?>


</div>   
</div> 
