<div class="row" id="galeria"> 
<div style="padding:20px;"> 

      <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px Gold; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Agregar Galeria </h3>
            </div>
        <form action="modulos_valida.php?cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">

            <div class=" col-xs-3 text-left">
                  Tipo
                  <select name="tipo" id="tipo" required class="form-control">
                            <option value="escritorio" selected="selected">escritorio</option>
                            <option value="celular" class="form-control">celular</option>
                </select>

            </div>
            <div class=" col-xs-2 text-left">
                  Estado
                  <select name="estado" id="estado" required class="form-control">
                        <option value="activo" selected="selected">activo</option>
                        <option value="inactivo" class="form-control">inactivo</option>
                  </select>
            </div>
            <div class=" col-xs-2 text-left">
                  Acomodo
                  <input type="text" name="acomodo" class="form-control" value="0" >
            </div>


            <div class=" col-xs-5 text-left">
                  Selecciona Imagen
                  <input type="file" name="imagen" class="form-control" >
            </div>
            
            <div class=" col-xs-12"></div>

            <div class=" col-xs-12 text-left" id="amenidades">
                  <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $clave;?>" >
                  <input type="hidden" name="alto" value="500" class="form-control" >
                  <input type="hidden" name="ancho" class="form-control" >
                  <input type="hidden" name="idioma" class="form-control" value="espanol" >
                  <input type="hidden" name="modulo" class="form-control" value="galeria" >
                  <input type="hidden" name="titulo" class="form-control" > 
                  <input type="hidden" name="lugar" class="form-control" > 
                  <input type="hidden" name="descripcion" class="form-control" > 
                  <p></p>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Guardar </button>
            </div>      
            
        </form>  
      </div>    
      </div>    



    <div class="col-xs-12" style="padding:10px;"> </div> 


    <!--- GALERIA ESCRITORIO ---->
    <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo ='galeria'AND tipo='escritorio' ");
    while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
    <div class="col-xs-12 col-sm-3 text-left" style="border-left: solid 2px Gold; padding:20px 20px 20px 20px; background-color:Ivory;"> 

            <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="seccion" class="form-control" value="<?php echo $rowamen['seccion'];?>" >
                <input type="hidden" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                <input type="hidden" name="subtitulo" class="form-control" value="<?php echo $rowamen['subtitulo'];?>">
                <input type="hidden" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
                <input type="hidden" name="lugar" class="form-control" value="<?php echo $rowamen['lugar'];?>" >
                <input type="hidden" name="descripcion" class="form-control" value="<?php echo $rowamen['descripcion'];?>" >
                <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                <input type="hidden" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
                <input type="hidden" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >

                    Tipo
                    <select name="tipo" id="tipo" required class="form-control">
                            <option value="<?php echo $rowamen['tipo'];?>" selected="selected"><?php echo $rowamen['tipo'];?></option>
                            <option value="escritorio" class="form-control">escritorio</option>
                            <option value="celular" class="form-control">celular</option>
                    </select>
                   <!--- ANOVE <input type="text" name="tipo" class="form-control" value="principal" > ANOVE --->

                    Estado
                    <select name="estado" id="estado" required class="form-control">
                            <option value="<?php echo $rowamen['estado'];?>" selected="selected"><?php echo $rowamen['estado'];?></option>
                            <option value="activo" class="form-control">activo</option>
                            <option value="inactivo" class="form-control">inactivo</option>
                    </select>

                    Acomodo
                    <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >

                    <p></p>
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                    
            </form>

            Imagen
            <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            
            <form action="modulos_actualiza_foto.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
                Selecciona Imagen
                <input type="file" name="imagen" required class="form-control" >
                <p></p>
                <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
            </form>   
        
        <p></p>
        <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
            <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
        </form>   
        
    </div>
    <?php } ?>


    <!--- GALERIA Telefono ---->
    <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo ='galeria'AND tipo='celular' ");
    while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
    <div class="col-xs-12 col-sm-2 text-left" style="border-left: solid 2px Gold; padding:20px 20px 20px 20px; background-color:Ivory;"> 

        <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="seccion" class="form-control" value="<?php echo $rowamen['seccion'];?>" >
                <input type="hidden" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                <input type="hidden" name="subtitulo" class="form-control" value="<?php echo $rowamen['subtitulo'];?>">
                <input type="hidden" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
                <input type="hidden" name="lugar" class="form-control" value="<?php echo $rowamen['lugar'];?>" >
                <input type="hidden" name="descripcion" class="form-control" value="<?php echo $rowamen['descripcion'];?>" >
                <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                <input type="hidden" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
                <input type="hidden" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >

                Tipo
                <select name="tipo" id="tipo" required class="form-control">
                        <option value="<?php echo $rowamen['tipo'];?>" selected="selected"><?php echo $rowamen['tipo'];?></option>
                        <option value="escritorio" class="form-control">escritorio</option>
                        <option value="celular" class="form-control">celular</option>
                </select>
               <!--- ANOVE <input type="text" name="tipo" class="form-control" value="principal" > ANOVE --->

                Estado
                <select name="estado" id="estado" required class="form-control">
                        <option value="<?php echo $rowamen['estado'];?>" selected="selected"><?php echo $rowamen['estado'];?></option>
                        <option value="activo" class="form-control">activo</option>
                        <option value="inactivo" class="form-control">inactivo</option>
                </select>

                Acomodo
                <input type="text" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >

                <p></p>
                <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                
        </form>

        Imagen
        <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
        <form action="modulos_actualiza_foto.php?cve2=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
            Selecciona Imagen
            <input type="file" name="imagen" required class="form-control" >
            <p></p>
            <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
        </form>   
    
    <p></p>
    <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>" method="post" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
    </form>   
    
</div>
<?php } ?>



</div>
</div>     