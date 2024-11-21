<!--- BANNER ---->
<div id="myCarousel" class="carousel slide ocultar-movil" data-ride="carousel">
    <div class="carousel-indicators">
        
        <!-- Linea de Carga -->
        <div data-target="#myCarousel" data-slide-to="0" class="active">  </div>
                <?php $re = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal' AND estado ='activo' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
            <div data-target="#myCarousel" data-slide-to="1">  </div>
            <?php } ?> 
        </div> 

        <!-- Indicators -->
        <div class="carousel-inner fondo-4" role="listbox">
                
            <!-- Slides-->
            <?php $re = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal' AND estado ='activo' LIMIT 1");
            while($row=mysqli_fetch_assoc($re)) { ?>
                <div class="item active">
                    <div style="display:flex; justify-content: center;">
                <img src="baner/<?php echo $row['foto'];?>" style="object-fit: cover; height:600px; width:100%; max-width:1600px;">
                </div>
                </div>
            <?php } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal' AND estado ='activo' LIMIT 100 OFFSET 1");
            while($row=mysqli_fetch_assoc($re)) { ?>
                <div class="item">
                <div style="display:flex; justify-content: center;">
                <img src="baner/<?php echo $row['foto'];?>" loading="lazy" style="object-fit: cover; height:600px; width:100%; max-width:1600px;">
                </div>
                </div>
            <?php } ?> 
            <!-- Slides-->

            <!-- Controles -->
            <div class="text-center" style="position:absolute; width:70px; height:70px;  bottom:47%; right:0px; z-index:1; padding:10px;">
            <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                <a href="#myCarousel" role="button" data-slide="next">
                    <img src="svg/derecha.svg" style="height:30px;">
                </a>
            </div>
            </div>
            <div class="text-center" style="position:absolute; width:70px; height:70px; bottom:47%; left:0px; z-index:1; padding:10px;">
            <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                <a href="#myCarousel" role="button" data-slide="prev">
                    <img src="svg/izquierda.svg" style="height:30px;">
                </a>
            </div>
            </div>

        </div>
    </div> 
</div> 
<!--- BANNER ---->

<!--- BANNER MOVIL---->
<div id="myCarouselm" class="carousel slide mostrar-movil" data-ride="carousel">
    <div class="carousel-indicators">
        
        <!-- Linea de Carga -->
        <div data-target="#myCarouselm" data-slide-to="0" class="active">  </div>
                <?php $rem = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal-movil' AND estado ='activo'");
            while($rowm=mysqli_fetch_assoc($rem)) { ?>
            <div data-target="#myCarouselm" data-slide-to="1">  </div>
            <?php } ?> 
        </div> 

        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">
                
            <!-- Slides-->
            <?php $rem = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal-movil' AND estado ='activo' LIMIT 1");
            while($rowm=mysqli_fetch_assoc($rem)) { ?>
                <div class="item active">
                <img src="baner/<?php echo $rowm['foto'];?>" style="object-fit: cover; height:600px; width:100%;">
                </div>
            <?php } ?> 
            <?php $rem = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo ='principal-movil' AND estado ='activo' LIMIT 100 OFFSET 1");
            while($rowm=mysqli_fetch_assoc($rem)) { ?>
                <div class="item">
                <img src="baner/<?php echo $rowm['foto'];?>" loading="lazy" style="object-fit: cover; height:600px; width:100%;">
                </div>
            <?php } ?> 
            <!-- Slides-->

            <!-- Controles -->
            <div class="text-center" style="position:absolute; width:70px; height:70px;  bottom:47%; right:0px; z-index:1; padding:10px;">
            <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                <a href="#myCarouselm" role="button" data-slide="next">
                    <img src="svg/derecha.svg" style="height:30px;">
                </a>
            </div>
            </div>
            <div class="text-center" style="position:absolute; width:70px; height:70px; bottom:47%; left:0px; z-index:1; padding:10px;">
            <div class="fondo-1" style="padding:10px; width:50px; height:50px;">
                <a href="#myCarouselm" role="button" data-slide="prev">
                    <img src="svg/izquierda.svg" style="height:30px;">
                </a>
            </div>
            </div>

        </div>
    </div> 
</div> 
<!--- BANNER MOVIL---->