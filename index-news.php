<div style="padding:0px; border-radius:0px;">
<div class="container" style="padding:100px 30px 100px 30px;"> 
<div class="row">

    <div class="col-xs-12 col-sm-12 text-center">  
        <h2 class="tipo-2 mayusculas ">Noticias Actividades y Eventos</h2>
        <p style="height:30px;"></p>
    </div> 

    <div class="col-xs-12  col-sm-5 text-left  fondo-blanco " style="padding:30px; height:500px;"> 
        <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND tres ='destacado' AND doce ='espanol' order by id DESC LIMIT 3");
        while($rowdes=mysqli_fetch_assoc($redes)) { ?>
        <h4 class="tipo-2 color-1 mayusculas"><?php echo $rowdes['uno']; ?></h4>
        <p style="height:0px"></p>  
        <div class="fondo-3 text-center" style="height:2px; width:70px;"></div>
        <p style="height:2px"></p>  
        <div style="padding:1px 5px 0px 10px">  
            <p class="text-justify tipo"><?php $des = substr($rowdes['descripcion'], 0, 100); echo $des; ?>...</p>
            <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
            <p class="tipo-2 mayusculas">Ver más</p>
            </a>
        </div>
        <hr>
        <p style="height:10px"></p>  
        <? } ?>
    </div>

    <div class="col-xs-12  col-sm-7 text-center" style="padding:0px;">
        <!--- BANNER --->
        <div id="myCarouselnews" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                
                <!-- -->
                <div data-target="#myCarouselnews" data-slide-to="0" class="active">  </div>
                    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND tres ='destacado' AND doce ='espanol' order by id DESC");
                    while($rowm=mysqli_fetch_assoc($rem)) { ?>
                    <div data-target="#myCarouselnews" data-slide-to="1">  </div>
                    <? } ?> 
                </div> 
                

                <!-- Indicators -->
                <div class="carousel-inner" role="listbox">
                        
                    <!-- Slides-->
                    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND tres ='destacado' AND doce ='espanol' order by id DESC LIMIT 1");
                    while($rowdes=mysqli_fetch_assoc($redes)) { ?>
                        <div class="item active">
                        <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
                        <img src="blog/<?php echo $rowdes['f1'];?>" style="object-fit: contain; height:500px; width:100%;">
                        </a>
                        </div>
                    <? } ?> 
                    <?php $redes = mysqli_query($conexion,"SELECT * FROM blog WHERE dos ='activo' AND tres ='destacado' AND doce ='espanol' order by id DESC LIMIT 100 OFFSET 1");
                    while($rowdes=mysqli_fetch_assoc($redes)) { ?>
                        <div class="item">
                        <a href="blog.php?cve=<?php echo $rowdes['dieciocho'];?>">
                        <img src="blog/<?php echo $rowdes['f1'];?>" loading="lazy" style="object-fit: contain; height:500px; width:100%;">
                        </a>
                        </div>
                    <? } ?> 
                    <!-- Slides-->

                </div>
            </div> 
        </div> 
        <!--- BANNER MOVIL---->
    </div>   

</div>
</div>
</div>
