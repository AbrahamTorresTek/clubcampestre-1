<div class="row" id="amenidades"> 
<div style="padding:20px;"> 

      <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px YellowGreen; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Agregar Amenidades </h3>
            </div>
        <form action="modulos_valida.php?cve2=<?php echo $clave;?>&regreso=amenidades" method="post" enctype="multipart/form-data">
            
            <div class=" col-xs-12 ">
                  <input type="hidden"class="form-control"  name="tipo"  value="principal" >
                  <input type="hidden"class="form-control"  name="estado"  value="activo" >
                  <input type="hidden"class="form-control"  name="modulo"  value="amenidades" >
                  <input type="hidden"class="form-control"  name="idioma"  value="espanol" >
                  <input type="hidden"class="form-control"  name="lugar"  value="" >

            </div>
            
            <div class=" col-xs-6 text-left">
                  Titulo
                  <input type="text" name="titulo" class="form-control" >
            </div>


            <div class=" col-xs-3 text-left">
                  Acomodo
                  <input type="text" name="acomodo" class="form-control" value="0" >
            </div>
            <div class=" col-xs-3 text-left">
                  Ancho Modulo
                  <input type="text" name="ancho" value="3" class="form-control" >
            </div>

            <div class=" col-xs-3 text-left">
                  Alto imagen px
                  <input type="text" name="alto" value="80" class="form-control" >
            </div>
            <div class=" col-xs-6 text-left">
                  Selecciona Imagen
                  <input type="file" name="imagen" class="form-control" >
            </div>
            
            <div class=" col-xs-12"></div>

            <div class=" col-xs-12 text-left" id="amenidades">
            Descripcion
                  <textarea type="text" name="descripcion" class="form-control" rows="2"></textarea>
                  <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $clave;?>" >
                  <p></p>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Guardar </button>
            </div>      
            
        </form>  
      </div>    
      </div>    






      <!--- AMENIDADES ---->
      <div class=" col-xs-12 text-left">
      </div>

      <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo='amenidades' ORDER BY acomodo ASC  ");
      while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
      <div class="col-xs-12 col-sm-4" style="padding:5px;"> 
      <div class="text-left" style="border-left: solid 2px YellowGreen; padding:20px 20px 20px 20px; background-color:HoneyDew;"> 

        <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>&regreso=amenidades" method="post" enctype="multipart/form-data">

            <input type="hidden" class="form-control" name="modulo" value="<?php echo $rowamen['modulo'];?>" >
            <input type="hidden" class="form-control" name="seccion" value="<?php echo $rowamen['seccion'];?>" >
            <input type="hidden" class="form-control" name="lugar" value="<?php echo $rowamen['lugar'];?>" >
            <input type="hidden" class="form-control" name="tipo" value="<?php echo $rowamen['tipo'];?>" >
            <input type="hidden" class="form-control" name="estado" value="<?php echo $rowamen['estado'];?>" >
            <input type="hidden" class="form-control" name="idioma" value="<?php echo $rowamen['idioma'];?>" >
                
            Titulo
            <input type="text" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">

            <div class=" col-xs-4 text-left">
                Acomodo
                <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >
            </div> 
            <div class=" col-xs-4 text-left">
                Ancho
                <input type="text" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
            </div> 
            <div class=" col-xs-4 text-left">
                Alto px
                <input type="text" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
            </div> 
            
            Descripcion
            <textarea type="text" name="descripcion" class="form-control" rows="2"><?php $des3 = str_replace("</br>","",$rowamen['descripcion']); $des31 = str_replace("<br />","",$des3); echo $des31; ?></textarea>
            <p></p>

            <div class=" col-xs-9 text-left">
                <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
            </div> 

        </form>
            
            <div class=" col-xs-3 text-left">
                <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
                <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                </form>   
            </div>



            Imagen
            <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
            <div style="height:8px;"></div>
            Selecciona Imagen
            <input type="file" name="imagen" required class="form-control" >
            <p></p>
            <button type="submit" class="btn btn-default btn-block" value="Enviar">  Actualizar </button>
            </form>   

        </div>
        </div> 
      <?php } ?>

</div>
</div>     