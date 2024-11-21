<!--- NOSOTROS ---->
<?php $refolo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-nosotros'"); 
$rowfolo = mysqli_fetch_array($refolo);?>
<div style="
background-image: url(imagenes/<?php echo $rowfolo['foto'];?>);
background-position: center center;
background-repeat: repeat-x;
">
<div style="
background-image: url(imagenes/decora-top-nosotros.png);
background-position: top center;
background-repeat: no-repeat;
">
<div class="container" style="padding:100px; 0px 100px 0px">
<div class="row">

    <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center" style="padding:20px;">
        <?php $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE tres ='si' AND dos ='activo' AND dieciocho ='about_us' AND trece ='ingles' order by id ASC");
        while($row=mysqli_fetch_assoc($re)) { ?>

        <img src="secciones/<?php echo $row['f1']; ?>" style="width:90%; ooobjet-fit:cover; bbborder:solid 0px silver; bbborder-radius:20px" class="block" data-move-y="-50px">
            
        <div class="" height="<?php echo $alto;?>px" style="padding:0px;">
            <p style="height:20px"></p>
            <h1 class="tipo-2 color-1 ocultar-movil mayusculas"><?php echo $row['siete']; ?></h1>

            <h3 class="tipo-2 color-1 mostrar-movil mayusculas"><?php echo $row['siete']; ?></h3>

            <p style="height:25px"></p>  
            <p class="text-center tipo"><?php $des = substr($row['descripcion'], 0, 400);
                                          echo $des; ?>...</p>
            <p style="height:20px"></p>
            <a href="eng-seccion.php?cve=<?php echo $row['dieciocho']; ?>">
              <div class="tipo-2 mayusculas boton">more information</div>
            </a>
            <!--- NOVE
            <a href="seccion.php?cve=nosotros">
              <button class="btn btn-btn1 tipo" style="border-radius:1px; width:200px;">Ver Más</button>
            </a>
             NOVE --->
        </div> 

        <?php } ?> 
    </div>  

</div>  
</div>  
</div>  
</div>  


