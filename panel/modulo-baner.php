<div class="row"> 
<div style="padding:20px;"> 

      <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px YellowGreen; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Agregar Amenidades </h3>
            </div>
        <form action="modulos_valida.php?cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
            <div class=" col-xs-6 text-left">
                  Titulo
                  <input type="text" name="titulo" class="form-control" >
            </div>
            <div class=" col-xs-2 text-left">
                  Tipo
                  <input type="text" name="tipo" class="form-control" value="principal" >
            </div>
            <div class=" col-xs-1 text-left">
                  Estado
                  <select name="estado" id="estado" required class="form-control">
                        <option value="activo" selected="selected">activo</option>
                        <option value="inactivo" class="form-control">inactivo</option>
                  </select>
            </div>
            <div class=" col-xs-1 text-left">
                  Acomodo
                  <input type="text" name="acomodo" class="form-control" value="0" >
            </div>
            <div class=" col-xs-2 text-left">
                  Modulo
                  <input type="text" name="modulo" class="form-control" value="amenidades" >
            </div>

            <div class=" col-xs-2 text-left">
                  Idioma
                  <input type="text" name="idioma" class="form-control" value="espanol" >
            </div>
            <div class=" col-xs-2 text-left">
                  Ancho Modulo
                  <input type="text" name="ancho" class="form-control" >
            </div>
            <div class=" col-xs-2 text-left">
                  Lugar
                  <select name="lugar" id="lugar" required class="form-control">
                        <option value="1" selected="selected">1</option>
                        <option value="2" class="form-control">2</option>
                        <option value="3" class="form-control">3</option>
                  </select>
            </div>
            <div class=" col-xs-2 text-left">
                  Alto imagen px
                  <input type="text" name="alto" class="form-control" >
            </div>
            <div class=" col-xs-4 text-left">
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
            <h4 class="tipo" style=""> Amenidades Agregadas</h4>
      </div>

      <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave'  ");
      while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
      <div class="col-xs-12 col-sm-12 text-left" style="border-left: solid 2px YellowGreen; padding:20px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="display:flex; justify-content:center; flex-wrap:wrap;"> 

        <div class=" col-xs-10 text-left">
            <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">

                <div class=" col-xs-6 text-left">
                    Titulo
                    <input type="text" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                </div>
                <div class=" col-xs-2 text-left">
                    Tipo
                    <input type="text" name="tipo" class="form-control" value="<?php echo $rowamen['tipo'];?>" >
                </div>
                <div class=" col-xs-2 text-left">
                    Estado
                    <select name="estado" id="estado" required class="form-control">
                            <option value="<?php echo $rowamen['estado'];?>" selected="selected"><?php echo $rowamen['estado'];?></option>
                            <option value="activo" class="form-control">activo</option>
                            <option value="inactivo" class="form-control">inactivo</option>
                    </select>
                </div>
                <div class=" col-xs-2 text-left">
                    Acomodo
                    <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >
                </div>

                <div class=" col-xs-3 text-left">
                    Idioma
                    <input type="text" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >
                </div>
                <div class=" col-xs-3 text-left">
                    Ancho Modulo
                    <input type="text" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
                </div>
                <div class=" col-xs-3 text-left">
                    Lugar
                    <select name="lugar" id="lugar" required class="form-control">
                            <option value="<?php echo $rowamen['lugar'];?>" selected="selected"><?php echo $rowamen['lugar'];?></option>
                            <option value="1" class="form-control">1</option>
                            <option value="2" class="form-control">2</option>
                            <option value="3" class="form-control">3</option>
                    </select>
                </div>
                <div class=" col-xs-3 text-left">
                    Alto imagen px
                    <input type="text" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
                </div>

                <div class=" col-xs-12 text-left">
                    Descripcion
                    <textarea type="text" name="descripcion" class="form-control" rows="2"><?php $des3 = str_replace("</br>","",$rowamen['descripcion']); $des31 = str_replace("<br />","",$des3); echo $des31; ?></textarea>
                    <p></p>
                </div>

                <div class=" col-xs-9 text-left">
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                </div> 
                <div class=" col-xs-2 text-left">
                    <input type="text" name="seccion" readonly class="form-control" value="<?php echo $rowamen['seccion'];?>" >
                    <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                </div> 

            </form>

                <div class=" col-xs-1 text-left">
                    <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>   
                </div>
        
        </div>  

        <div class=" col-xs-2 text-left">
            Imagen
            <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto.php?cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
            <div style="height:8px;"></div>
            Selecciona Imagen
            <input type="file" name="imagen" required class="form-control" >
            <p></p>
            <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
            </form>   
        </div> 

      </div>   
      </div> 
      <div class="col-xs-12"><p></p></div>
      <? } ?>

</div>
</div>     