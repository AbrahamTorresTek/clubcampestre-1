<div class="row" id="info"> 
<div style="padding:20px;"> 

      <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px green; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Info Izquierda - Img derecha</h3>
            </div>
      <form action="modulos_valida.php?cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
            
            <div class=" col-xs-12 text-left">
                  <input type="hidden" name="tipo" class="form-control" value="principal" >
                  <input type="hidden" name="estado" class="form-control" value="activo" >
                  <input type="hidden" name="modulo" class="form-control" value="info2" >
                  <input type="hidden" name="idioma" class="form-control" value="espanol" >
                  <input type="hidden" name="lugar" class="form-control" value="0" >
                  <input type="hidden" name="ancho" class="form-control" >
            </div>
            <div class=" col-xs-7 text-left">
                  Titulo
                  <input type="text" name="titulo" class="form-control" >
            </div>
            <div class=" col-xs-5 text-left">
                  Subitulo
                  <input type="text" name="subtitulo" class="form-control" >
            </div>

            <div class=" col-xs-2 text-left">
                  Lugar
                  <select name="acomodo" id="acomodo" required class="form-control">
                        <option value="1" selected="selected">1 img der</option>
                        <option value="2" class="form-control">2 img izq</option>
                        <option value="3" class="form-control">3 img der</option>
                        <option value="4" class="form-control">4 img izq</option>
                  </select>
            </div>
            <div class=" col-xs-2 text-left">
                  Alto imagen px
                  <input type="text" name="alto" value="500" class="form-control" >
            </div>
            <div class=" col-xs-4 text-left">
                  Selecciona Imagen
                  <input type="file" name="imagen" class="form-control" >
            </div>
            <div class=" col-xs-4 text-left">
                  Selecciona Imagen Movil
                  <input type="file" name="imagen2" class="form-control" >
            </div>
            
            <div class=" col-xs-12"></div>

            <div class=" col-xs-12 text-left" id="infoidades">
            Descripcion
                  <textarea type="text" name="descripcion" class="form-control" rows="2"></textarea>
                  <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $clave;?>" >
                  <p></p>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Guardar </button>
            </div>      
            
      </form>  
      </div>    
      </div>    




      <!--- AGREGADOS ---->
      <div class=" col-xs-12"></div>

      <?php $reinfo = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo='info2' ORDER BY acomodo");
      while($rowinfo=mysqli_fetch_assoc($reinfo)) { ?>
      <div class="col-xs-12 col-sm-12 text-left" style="border-left: solid 2px green; padding:20px 20px 20px 20px; background-color:Beige;"> 
      <div class="row" style="display:flex; justify-content:center; flex-wrap:wrap;"> 

      <div class=" col-xs-8 text-left">
            <form action="modulos_actualiza.php?cve2=<?php echo $rowinfo['id'];?>" method="post" enctype="multipart/form-data">

            <div class=" col-xs-8 text-left">
                  Titulo
                  <input type="text" name="titulo" class="form-control" value="<?php echo $rowinfo['titulo'];?>">
            </div>
            <div class=" col-xs-2 text-left">
            Estado
            <select name="estado" id="estado" required class="form-control">
                  <option value="<?php echo $rowinfo['estado'];?>" selected="selected"><?php echo $rowinfo['estado'];?></option>
                  <option value="activo" class="form-control">activo</option>
                  <option value="inactivo" class="form-control">inactivo</option>
            </select>
            </div>
            <div class=" col-xs-2 text-left">
            Acomodo
            <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowinfo['acomodo'];?>" >
            </div>

                <div class=" col-xs-8 text-left">
                    Subitulo
                    <input type="text" name="subtitulo" class="form-control" value="<?php echo $rowinfo['subtitulo'];?>">
                </div>
                <div class=" col-xs-2 text-left">
                    Idioma
                    <input type="text" name="idioma" class="form-control"  value="<?php echo $rowinfo['idioma'];?>" >
                </div>
                <div class=" col-xs-2 text-left">
                    Alto imagen px
                    <input type="text" name="alto" class="form-control" value="<?php echo $rowinfo['alto'];?>" >
                </div>

                <div class=" col-xs-12 text-left">
                    Descripcion
                    <textarea type="text" name="descripcion" class="form-control" rows="2"><?php $des3 = str_replace("</br>","",$rowinfo['descripcion']); $des31 = str_replace("<br />","",$des3); echo $des31; ?></textarea>
                    <p></p>
                </div>

                <div class=" col-xs-9 text-left">
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                </div> 
                <div class=" col-xs-2 text-left">
                    <input type="text" name="seccion" readonly class="form-control" value="<?php echo $rowinfo['seccion'];?>" >
                    <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowinfo['modulo'];?>" >
                    <input type="hidden" name="tipo" class="form-control" value="<?php echo $rowinfo['tipo'];?>" >
                    <input type="hidden" name="ancho" class="form-control" value="<?php echo $rowinfo['ancho'];?>" >
                    <input type="hidden" name="lugar" class="form-control" value="<?php echo $rowinfo['lugar'];?>" >
                </div> 

            </form>

                <div class=" col-xs-1 text-left">
                    <form action="modulos_elimina.php?cve=<?php echo $rowinfo['id'];?>" method="post" enctype="multipart/form-data">
                    <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>   
                </div>
        
        </div>  

        <div class=" col-xs-2 text-left">
            Imagen
            <img src="../modulos/<?php echo $rowinfo['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto_1.php?cve2=<?php echo$rowinfo['id'];?>" method="post" enctype="multipart/form-data">
                  <div style="height:8px;"></div>
                  Selecciona Imagen
                  <input type="file" name="imagen" required class="form-control" >
                  <p></p>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
            </form>   
        </div> 
        <div class=" col-xs-2 text-left">
            Imagen Movil
            <img src="../modulos/<?php echo $rowinfo['f2']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto_2.php?cve2=<?php echo$rowinfo['id'];?>" method="post" enctype="multipart/form-data">
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