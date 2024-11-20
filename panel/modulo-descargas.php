<div class="row" id="descargas"> 
<div style="padding:20px;"> 

    <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px DarkViolet; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
    <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Agregar Descarga </h3>
            </div>

        <form action="modulos_valida.php?cve2=<?php echo $clave;?>&regreso=descargas" method="post" enctype="multipart/form-data">
            
            <div class=" col-xs-12 text-left">
                  <input type="hidden" name="tipo" class="form-control" value="principal" >
                  <input type="hidden" name="estado" class="form-control" value="activo" >
                  <input type="hidden" name="modulo" class="form-control" value="descargas" >
                  <input type="hidden" name="idioma" class="form-control" value="" >
                  <input type="hidden" name="estado" class="form-control" value="activo" >
                  <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $clave;?>" >
            </div>
            
            <div class=" col-xs-3 text-left">
                  Titulo
                  <input type="text" name="titulo" class="form-control" >
            </div>
            <div class=" col-xs-2 text-left">
                  Acomodo
                  <input type="text" name="acomodo" class="form-control" value="0" >
            </div>
            <div class=" col-xs-2 text-left">
                  Ancho Modulo
                  <input type="text" name="ancho" value="3" class="form-control" >
            </div>
            <div class=" col-xs-2 text-left">
                  Alto imagen px
                  <input type="text" name="alto" value="400" class="form-control" >
            </div>

            <input type="hidden" name="link_tipo" value="_blanck" class="form-control" >
            <!--- NOVE
            <div class=" col-xs-2  text-left">
                  Tipo de descarga
                  <select name="link_tipo" id="link_tipo" required class="form-control">
                        <option value="_blanck" selected="selected">Ventana aparte</option>
                        <option value="_self" class="form-control">Misma Ventana</option>
                  </select>
            </div>
            NOVE ---->

            <div class=" col-xs-3 text-left">
                  Selecciona Imagen
                  <input type="file" name="imagen" class="form-control" >
            </div>

      <div class=" col-xs-12"></div>

            <div class="  col-xs-6  text-left">
                  Url del archivo
                  <input type="text" name="link" class="form-control" >
                  <small>Alojado fuera del servidor</small>
            </div>

            <div class=" col-xs-6 text-left">
                  Cargar Archivo
                  <input type="file" name="imagen2" class="form-control" >
                  <small>Subir archivo al servidor</small>
            </div>
    
            <div class=" col-xs-12"></div>

            <div class=" col-xs-12 text-left" id="amenidades">
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Guardar </button>
            </div>      
            
        </form>  

    </div>    
    </div>    





    <div class="col-xs-12"><p></p></div>





    <!--- DESCARGAS ---->
    <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo='descargas' ORDER BY acomodo ASC ");
    while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
    <div class="col-xs-12 col-sm-4 text-left" style="border-left: solid 2px DarkViolet; padding:20px 20px 20px 20px; background-color:WhiteSmoke;"> 
        
                    Imagen
                    <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto_1.php?cve2=<?php echo $rowamen['id'];?>&regreso=descargas" method="post" enctype="multipart/form-data">
                  <p></p>
                  <div style="height:5px;"></div>
                  Cambiar Imagen
                  <input type="file" name="imagen" required class="form-control" >
                  <div style="height:5px;"></div>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Img </button>
                  <div style="height:8px;"></div>
            </form>   

            <form action="modulos_actualiza_foto_2.php?cve2=<?php echo $rowamen['id'];?>&regreso=descargas" method="post" enctype="multipart/form-data">
                  <p></p>
                  <div style="height:5px;"></div>
                  Agregar Cambiar Descarga
                  <input type="file" name="imagen" required class="form-control" >
                  <div style="height:5px;"></div>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Img </button>
                  <div style="height:8px;"></div>
            </form>   

            <div style="height:10px;"></div>
            
            <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>&regreso=descargas" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                    <input type="hidden" name="tipo" class="form-control" value="<?php echo $rowamen['tipo'];?>" >
                    <input type="hidden" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >
                    <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                    <input type="hidden" name="lugar" readonly class="form-control" value="<?php echo $rowamen['lugar'];?>" >
                    <input type="hidden" name="estado" readonly class="form-control" value="<?php echo $rowamen['estado'];?>" >
                    <input type="hidden" name="descripcion" readonly class="form-control" value="<?php $des3 = str_replace("</br>","",$rowamen['descripcion']); $des31 = str_replace("<br />","",$des3); echo $des31; ?>" >
                    <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $rowamen['seccion'];?>" >


                    Acomodo
                    <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >

                    Ancho Modulo
                    <input type="text" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >

                    Alto imagen px
                    <input type="text" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >

                    Url del archivo
                    <input type="text" name="link" value="<?php echo $rowamen['link'];?>" class="form-control" >
                    
                    Tipo de descarga
                        <select name="link_tipo" id="link_tipo" required class="form-control">
                                <option value="<?php echo $rowamen['link_tipo'];?>" selected="selected"><?php echo $rowamen['link_tipo'];?></option>
                                <option value="_blanck" class="form-control">Ventana aparte</option>
                                <option value="_self" class="form-control">Misma Ventana</option>
                        </select>
                    <div style="height:10px;"></div>
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
            </form>

            <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
            <p></p>
                    <button type="submit" class="btn btn-danger btn-block" value="Enviar"> Eliminar </button>
            </form>   
    </div> 

    <? } ?>

</div>
</div>     