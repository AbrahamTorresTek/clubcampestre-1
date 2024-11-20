<?php include("cabezera.php");?>
<body>
<div class="wrapper">
      <!-- LATERAL -->
      <?php  include("admin.php"); ?>
      <!-- LATERAL -->
      
      <!-- CONTENIDO -->
      <div id="content">
      <div class="row" style="padding:5px;">

      <!-- BOTON CERRAR -->
      <div class=" col-xs-12 col-sm-1 text-left">
                  <button type="button" id="sidebarCollapse" class="btn">
                        <span></span>
                        <span></span>
                        <span></span>
                  </button>
      </div>

      <div class=" col-xs-12 col-sm-4 text-left">
            <h4 class="tipo color"> OCULTAR MENU LATERAL</h4>
      </div>

      <div class=" col-xs-12 ">
            <hr>
      </div>

      <div class=" col-xs-12 col-sm-3 text-left">
            <a href="secciones_todos.php">
            <button class="btn btn-block btn-warning"> Regresar </button>
            </a>
      </div>

      <div class=" col-xs-12 col-sm-4 text-left">
            <h4 class="tipo color"> Editar producto </h4>
      </div>

      <div class=" col-xs-12 "><br></div>
      <!-- BOTON CERRAR -->

      <!----- FORM ---->
      <div class=" col-xs-12 col-sm-12 text-left" style="padding:30px;">
      <div class="row" style="border: solid 2px silver; padding:10px; background-color:WhiteSmoke;">
            <?php 
            $clave = $_GET['cve']; 
            $tipo = $_GET['tipo']; 
            $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE id='$clave'");
            while($row = mysqli_fetch_assoc($re)) { ?>  

      <form action="secciones_actualiza.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

            <div class=" col-xs-12 col-sm-12 text-left">
                  <h3 class="tipo" style="color:black;" >Pagina de Inicio</h3> 
                  <input type="hidden" name="dos" required class="form-control" value="<?php echo $row['dos'];?>" >
                  <input type="hidden" name="cinco" required class="form-control" value="<?php echo $row['cinco'];?>" >
                  <input type="hidden" name="tres" required class="form-control" value="<?php echo $row['tres'];?>" >
                  <input type="hidden" name="funo"  class="invisible" value="<?php echo $row['f1'];?>" >
                  <input type="hidden" name="fdos"  class="invisible"  value="<?php echo $row['f2'];?>" >
                  <input type="hidden" name="ftres"  class="invisible" value="<?php echo $row['f3'];?>" >
            </div>
            <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class=" tipo">Nombre Seccion <small>Visible en menu</small></h4> 
                  <input type="text" name="uno" required class="form-control" value="<?php echo $row['uno'];?>" >
            </div>
            <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class=" tipo"> Seo </h4> 
                  <input type="text" name="dieciocho" class="form-control" value="<?php echo $row['dieciocho'];?>" >
                  <small>minusculas sin caracteres extraños - medio en lugar de espacio</small>
            </div>
            <div class="col-xs-12 col-sm-2 text-left">
                  <h4 class=" tipo">Idioma</h4> 
                  <select name="trece" id="trece" required class="form-control">
                        <option value="<?php echo $row['trece'];?>" selected="selected"><?php echo $row['trece'];?></option>
                        <option value="espanol" class="form-control">español</option>
                        <option value="ingles" class="form-control">Ingles</option>
                  </select>
            </div>
            <div class=" col-xs-2 col-sm-2 text-left">
                  <h4 class=" tipo">Posicion en Menu </h4> 
                  <select name="cuatro" id="cuatro" required class="form-control">
                        <option value="<?php echo $row['cuatro'];?>" selected class="form-control"> <?php echo $row['cuatro'];?> </option>
                        <option value="casa-club" class="form-control"> Casa club </option>
                        <option value="golf" class="form-control"> Golf </option>
                        <option value="restaurants" class="form-control"> Restaurantes </option>
                        <option value="sociales" class="form-control"> Social </option>
                        <option value="menu_derecho" class="form-control"> Menu Derecho</option>
                        <option value="menu_izquierdo" class="form-control"> Menu Izquierdo</option>
                  </select>
            </div>

      <div class=" col-xs-12"></div>

            <div class=" col-xs-12 col-sm-3 text-left">
                  <h4 class=" tipo"> Visible en el index </h4> 
                  <select name="doce" id="doce" required class="form-control">
                        <option value="<?php echo $row['doce'];?>" selected="selected"><?php echo $row['doce'];?></option>
                        <option value="normal" class="form-control">Normal</option>
                        <option value="promocion" class="form-control">Promoción Visible Index</option>
                        <option value="restaurant" class="form-control">Restaurant</option>
                  </select>
            </div>
            <div class="col-xs-12 col-sm-3 text-left">
                  <h4 class=" tipo">Ancho </h4> 
                  <input type="text" name="nueve" required class="form-control" value="<?php echo $row['nueve'];?>" >
                  <small>col-sm-offset </small>
                  </select>
            </div>


            <!--- NOVE
            <div class=" col-xs-12 col-sm-3 text-left">
                  <h4 class=" tipo">Alto px</h4> 
                  <input type="text" name="diez" required class="form-control" value="<?php echo $row['diez'];?>" >
            </div>
            NOVE --->

            <div class=" col-xs-12 col-sm-12 text-left">            
                  <div style="background-color:#F3F3F3; padding:0px 10px 0px 10px;">
                  <h3 class="tipo color-negro">Seccion Interna</h3> 
                  </div>
            </div>
            <div class=" col-xs-12 col-sm-6 text-left">
                  <h4 class=" tipo">Titulo Interior</h4> 
                  <input type="text" name="siete" class="form-control" value="<?php echo $row['siete'];?>" >
            </div>
            <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class=" tipo">Subtitulo</h4> 
                  <input type="text" name="ocho" class="form-control" value="<?php echo $row['ocho'];?>" >
            </div>
            <div class=" col-xs-12 col-sm-2 text-left">
                  <h4 class=" tipo">Alto px</h4> 
                  <input type="text" name="once" class="form-control" value="<?php echo $row['once'];?>" >
            </div>

            <div class=" col-xs-12 text-left">
                  <h4 class=" tipo">Descripcion</h4> 
                  <textarea type="text" name="descripcion" class="form-control" rows="5"><?php $des = str_replace("</br>","",$row['descripcion']); $des2 = str_replace("<br />","",$des); echo $des2; ?> </textarea>
            </div>

            <div class=" col-xs-12 col-sm-12 text-left">
                  <p></p>
                  <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Actualizar contenido</button>
            </div> 
            
            <? } ?>     
      </form>    
      <!----- CONTENIDO ---->
      
      </div>
      </div>
</div>


<!--- MODULO APP ---->
<?php include("modulo-app.php");?>
<!--- MODULO APP ---->

<!--- MODULO INFO 2 ---->
      <?php include("modulo-info-2.php");?>
<!--- MODULO INFO 2 ---->

<!--- MODULO AMENIDADES ---->
      <?php include("modulo-amenidades.php");?>
<!--- MODULO AMENIDADES ---->

<!--- MODULO GALERIA ---->
<?php include("modulo-galeria.php");?>
<!--- MODULO GALERIA ---->

<!--- MODULO CALENDARIO ---->
<?php include("modulo-calendario.php");?>
<!--- MODULO CALENDARIO ---->

<!--- MODULO POP ---->
<?php include("modulo-pop.php");?>
<!--- MODULO POP ---->

<!--- MODULO DESCARGAS ---->
<?php include("modulo-descargas.php");?>
<!--- MODULO DESCARGAS ---->

</div>
<!-- FOOTER -->
<?php include("footer.php") ?>
<!-- FOOTER -->

</body>
</html>