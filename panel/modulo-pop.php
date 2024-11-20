<div class="row" id="pop"> 
<div style="padding:20px;"> 

      <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px red; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
      <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Agregar Pop Up </h3>
            </div>
        <form action="modulos_valida.php?cve2=<?php echo $clave;?>&regreso=pop" method="post" enctype="multipart/form-data">
            
            <div class=" col-xs-12 text-left">
                  <input type="hidden" name="titulo" class="form-control" >
                  <input type="hidden" name="acomodo" class="form-control" value="0" >
                  <input type="hidden" name="modulo" class="form-control" value="pop" >
                  <input type="hidden" name="ancho" class="form-control" >
                  <input type="hidden" name="lugar" class="form-control" >
                  <input type="hidden" name="alto" class="form-control" >
                  <input type="hidden" name="descripcion" class="form-control" >
                  <input type="hidden" name="idioma" class="form-control" >
                  <input type="hidden" name="seccion" class="form-control" value="<?php echo $clave;?>" >
                  <input type="hidden" name="estado" class="form-control"  value="activo" >
            </div>

            <div class=" col-xs-2 text-left">
                  Tipo
                  <select name="tipo" id="tipo" required class="form-control">
                            <option value="escritorio" selected="selected">escritorio</option>
                            <option value="celular" class="form-control">celular</option>
                </select>
            </div>
            <div class=" col-xs-4 text-left">
                  Selecciona Imagen
                  <input type="file" name="imagen" class="form-control" >
            </div>
            
            <div class=" col-xs-4">
                  <p style="height:10px;"></p>
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Guardar </button>
            </div>      
            
        </form>  
      </div>    
      </div>    

    <div class="col-xs-12" style="padding:10px;"> </div> 

    <!--- GALERIA ESCRITORIO ---->
    <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo ='pop'AND tipo='escritorio'");
    while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
    <div class="col-xs-12 col-sm-4 text-left" style="border-left: solid 2px red; padding:20px 20px 20px 20px; background-color:WhiteSmoke;"> 

            <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>&regreso=pop" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $rowamen['seccion'];?>" >
                    <input type="hidden" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                    <input type="hidden" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
                    <input type="hidden" name="lugar" class="form-control" value="<?php echo $rowamen['lugar'];?>" >
                    <input type="hidden" name="descripcion" class="form-control" value="<?php echo $rowamen['descripcion'];?>" >
                    <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                    <input type="hidden" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >
                    <input type="hidden" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
                    <input type="hidden" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >
                    <input type="hidden" name="estado" class="form-control"  value="<?php echo $rowamen['estado'];?>" >
                    Tipo
                    <select name="tipo" id="tipo" required class="form-control">
                            <option value="<?php echo $rowamen['tipo'];?>" selected="selected"><?php echo $rowamen['tipo'];?></option>
                            <option value="escritorio" class="form-control">escritorio</option>
                            <option value="celular" class="form-control">celular</option>
                    </select>

                    <p></p>
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                    
            </form>

            Imagen
            <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
            <form action="modulos_actualiza_foto.php?cve2=<?php echo $clave;?>&regreso=pop" method="post" enctype="multipart/form-data">

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
    <? } ?>

    <!--- GALERIA Telefono ---->
    <?php $reamen = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$clave' AND modulo ='pop'AND tipo='celular' ");
    while($rowamen=mysqli_fetch_assoc($reamen)) { ?>
    <div class="col-xs-12 col-sm-3 text-left" style="border-left: solid 2px red; padding:20px 20px 20px 20px; background-color:WhiteSmoke;"> 

        <form action="modulos_actualiza.php?cve2=<?php echo $rowamen['id'];?>&regreso=pop" method="post" enctype="multipart/form-data">

                <input type="hidden" name="seccion" readonly class="form-control" value="<?php echo $rowamen['seccion'];?>" >
                <input type="hidden" name="titulo" class="form-control" value="<?php echo $rowamen['titulo'];?>">
                <input type="hidden" name="ancho" class="form-control" value="<?php echo $rowamen['ancho'];?>" >
                <input type="hidden" name="lugar" class="form-control" value="<?php echo $rowamen['lugar'];?>" >
                <input type="hidden" name="descripcion" class="form-control" value="<?php echo $rowamen['descripcion'];?>" >
                <input type="hidden" name="modulo" readonly class="form-control" value="<?php echo $rowamen['modulo'];?>" >
                <input type="hidden" name="acomodo" class="form-control"  value="<?php echo $rowamen['acomodo'];?>" >
                <input type="hidden" name="alto" class="form-control" value="<?php echo $rowamen['alto'];?>" >
                <input type="hidden" name="idioma" class="form-control"  value="<?php echo $rowamen['idioma'];?>" >
                <input type="hidden" name="estado" class="form-control"  value="<?php echo $rowamen['estado'];?>" >

                Tipo
                <select name="tipo" id="tipo" required class="form-control">
                        <option value="<?php echo $rowamen['tipo'];?>" selected="selected"><?php echo $rowamen['tipo'];?></option>
                        <option value="escritorio" class="form-control">escritorio</option>
                        <option value="celular" class="form-control">celular</option>
                </select>
                <p></p>
                <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar Datos </button>
                
        </form>

        Imagen
        <img src="../modulos/<?php echo $rowamen['f1']; ?>" class="" style="object-fit:contain; width:100%; height:115px; padding:10px; background-color:white; border:1px solid silver;">
        <form action="modulos_actualiza_foto.php?cve2=<?php echo $clave;?>&regreso=pop" method="post" enctype="multipart/form-data">

        Selecciona Imagen
        <input type="file" name="imagen" required class="form-control" >
        <p></p>
        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
        </form>   
    
    <p></p>
    <form action="modulos_elimina.php?cve=<?php echo $rowamen['id'];?>&regreso=pop" method="post" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
    </form>   
    
</div>
<? } ?>



</div>
</div>     