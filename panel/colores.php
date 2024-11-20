<?php include("cabezera.php");?>

<body>

    <div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

        <!-- CONTENIDO -->
        <div id="content">
          
           <!-- BOTON CERRAR -->
           <div class="row">

<div class=" col-xs-12 col-sm-1 text-left">
  <button type="button" id="sidebarCollapse" class="btn">
                  <span></span>
                  <span></span>
                  <span></span>
  </button>
</div>

<div class=" col-xs-12 col-sm-4 text-left">
  <h4 class="tipo color"> OCULTAR MENU</h4>
</div>

<div class=" col-xs-12 ">
  <hr>
</div>

<div class=" col-xs-12 col-sm-3 text-left">
  <a href="menu_alta_dise.php">
      <button class="btn btn-block btn-warning"> Regresar Home</button>
  </a>
</div>

<div class=" col-xs-12 col-sm-4 text-left">
  <p class="tipo color2"> Información General</p>
</div>
</div>  
<!-- BOTON CERRAR -->

<div class=" col-xs-12 text-center"><p><br></p></div>  

<!--- IMAGENES --->
<div class=" col-xs-12 text-left">
<div class="fondo-gris">
      <h4 class="tipo color-negro"> Imagenes </h4>
</div>
</div>

<div class=" col-xs-12 text-center"><p></p></div>  

<?php 
$re = mysqli_query($conexion,"SELECT * FROM imagenes WHERE estado='activo'");
while($row = mysqli_fetch_assoc($re)) { ?>  

<div class=" col-xs-3 text-center" style="";>
<form action="imagen_actualiza.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

      <p></p>
      <small class="tipo"><?php echo $row['nombre'];?></small>
      <img src="../imagenes/<?php echo $row['foto'];?>" width="100%" style="object-fit:contain ;width:100%; height:80px;">
      <input type="file" name="imagen" required placeholder="Seleccionar" class="form-control" >
      <p></p>
      <button type="submit" class="btn btn- btn-block" value="Enviar"> Actualizar</button>
      <p></p>

</form>  
</div>  
<? } ?>

<!--- IMAGENES --->



<!----- CONTENIDO ---->
<div class=" col-xs-12 text-left">
<p><br></p>
<div class="fondo-gris">
      <h4 class="tipo color-negro"> Colores y Estilos </h4>
</div>
</div>
<?php 
$co = mysqli_query($conexion,"SELECT * FROM colores ");
while($col = mysqli_fetch_assoc($co)) { ?>   
<form action="colores_actualiza.php?cve2=<?php echo $col['id'];?>" method="post" enctype="multipart/form-data">

      <div class=" col-xs-12 text-left">
      <h4 class="tipo color2"> Colores Principales </h4>
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Fondo General</p> 
            <input height="20px" type="color" name="fondogeneral" class="form-control" value="<?php echo $col['fondogeneral'];?>">
            <?php echo $col['fondogeneral'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Fondo General Texto</p> 
            <input height="20px" type="color" name="fondogeneraltexto" class="form-control" value="<?php echo $col['fondogeneraltexto'];?>">
            <?php echo $col['fondogeneraltexto'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Link</p> 
            <input height="20px" type="color" name="link" class="form-control" value="<?php echo $col['link'];?>">
            <?php echo $col['link'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Link Hover</p> 
            <input height="20px" type="color" name="linkhover" class="form-control" value="<?php echo $col['linkhover'];?>">
            <?php echo $col['linkhover'];?>
            
      </div>


      <div class=" col-xs-12 text-left">
      <hr>
      <h4 class="tipo color2"> Menu </h4>
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Menu Abajo / Fondo</p> 
            <input height="20px" type="color" name="menufondo" class="form-control" value="<?php echo $col['menufondo'];?>">
            <?php echo $col['menufondo'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Menu Abajo / Texto</p> 
            <input height="20px" type="color" name="menutexto" class="form-control" value="<?php echo $col['menutexto'];?>">
            <?php echo $col['menutexto'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Menu Hover</p> 
            <input height="20px" type="color" name="menuhover" class="form-control" value="<?php echo $col['menuhover'];?>">
            <?php echo $col['menuhover'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Menu Hover Texto</p> 
            <input height="20px" type="color" name="menuborder" class="form-control" value="<?php echo $col['menuborder'];?>">
            <?php echo $col['menuborder'];?>
            
      </div>

      
      <div class=" col-xs-12 text-left">
      <hr>
      <h4 class="tipo color-negro"> Colores Principales </h4>
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Color Principal</p> 
            <input height="20px" type="color" name="color1" class="form-control" value="<?php echo $col['color1'];?>">
            <?php echo $col['color1'];?>
            <p class=" tipo">Fondo 1</p> 
            <input height="20px" type="color" name="fondocolor1" class="form-control" value="<?php echo $col['fondocolor1'];?>">
            <?php echo $col['fondocolor1'];?>
            
            <p class=" tipo">Texto 1</p> 
            <input height="20px" type="color" name="fondocolortexto1" class="form-control" value="<?php echo $col['fondocolortexto1'];?>">
            <?php echo $col['fondocolortexto1'];?>
            
      </div>
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Color Contraste</p> 
            <input  type="color" name="color2" class="form-control" value="<?php echo $col['color2'];?>">
            <?php echo $col['color2'];?>
            <p class=" tipo">Fondo Contraste</p> 
            <input  type="color" name="fondocolor2" class="form-control" value="<?php echo $col['fondocolor2'];?>">
            <?php echo $col['fondocolor2'];?>
            
            <p class=" tipo">Fondo Contraste Texto</p> 
            <input height="20px" type="color" name="fondocolortexto2" class="form-control" value="<?php echo $col['fondocolortexto2'];?>">
            <?php echo $col['fondocolortexto2'];?>
            
      </div>
      

      <!----- NOVE NOVE ---->
      <div class=" col-xs-3 text-left">
            <p class=" tipo">Color 3 Links</p> 
            <input  type="color" name="color3" class="form-control" value="<?php echo $col['color3'];?>">
            <?php echo $col['color3'];?>
            
      </div>

      <div class=" col-xs-3 text-left">
            <p class=" tipo">Color 4 </p> 
            <input  type="color" name="color4" class="form-control" value="<?php echo $col['color4'];?>">
            <?php echo $col['color4'];?>
            
      </div>


      <div class=" col-xs-3 text-left">
            <p class=" tipo">Fondo 3</p> 
            <input  type="color" name="fondocolor3" class="form-control" value="<?php echo $col['fondocolor3'];?>">
            <?php echo $col['fondocolor3'];?>
            
            <p class=" tipo">Color Texto 3</p> 
            <input height="20px" type="color" name="fondocolortexto3" class="form-control" value="<?php echo $col['fondocolortexto3'];?>">
            <?php echo $col['fondocolortexto3'];?>
            
      </div>


      <div class=" col-xs-3 text-left">
            <p class=" tipo">Fondo 4</p> 
            <input  type="color" name="fondocolor4" class="form-control" value="<?php echo $col['fondocolor4'];?>">
            <?php echo $col['fondocolor4'];?>
            
            <p class=" tipo">Color Texto 4</p> 
            <input height="20px" type="color" name="fondocolortexto4" class="form-control" value="<?php echo $col['fondocolortexto4'];?>">
            <?php echo $col['fondocolortexto4'];?>
            
      </div>

      <div class=" col-xs-10 text-left">
            <p><hr/></p>
            <button type="submit" class="btn btn-default" value="Enviar"> Guardar datos</button>
            <p><br/></p>
      </div>   
                                    
</form>  
<? } ?>   
<!----- CONTENIDO ---->
            
                              
        
            
        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>