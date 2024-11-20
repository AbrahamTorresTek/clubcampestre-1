<div class="row"> 
<div style="padding:20px;"> 
<?php 
$clave = $_GET['cve']; 
$re = mysqli_query($conexion,"SELECT * FROM secciones WHERE id='$clave'");
while($row = mysqli_fetch_assoc($re)) { ?>
<?php $seccion = $row['dieciocho'];?>  
<? } ?> 
    <!--- CALENDARIO ---->
    <div class="col-xs-12 col-sm-12 text-left" id="calendario" style="border: solid 2px orange; padding:0px 20px 20px 20px; background-color:WhiteSmoke;"> 
    <div class="row" style="padding:2px;"> 

            <div class=" col-xs-12 text-left">
                  <h3 class="tipo" style="color:black;"> Calendario   </h3>
            </div>

    <!--- AGREGAR --->
            <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                <div class="col-xs-12 col-sm-1 text-left">
                    <input type="text" name="uno" class="form-control" value=""  placeholder="Hora">
                </div>
                <div class="col-xs-12 col-sm-1 text-left">
                    <input type="text" name="seis" class="form-control" value=""  placeholder="acomodo">
                </div>
                <div class="col-xs-12 col-sm-2 text-left">
                    <select name="dos" id="dos" required class="form-control">
                        <option value="lunes" class="form-control">lunes</option>
                        <option value="martes" class="form-control">martes</option>
                        <option value="miercoles" class="form-control">miercoles</option>
                        <option value="jueves" class="form-control">jueves</option>
                        <option value="viernes" class="form-control">viernes</option>
                        <option value="sabado" class="form-control">sabado</option>
                        <option value="domingo" class="form-control">domingo</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-2 text-left">
                    <select name="tres" id="tres" required class="form-control">
                        <option value="<?php echo $seccion;?>" selected class="form-control"> Sección </option>
                        <?php $rese = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND trece ='espanol'");
                        while($rowse=mysqli_fetch_assoc($rese)) { ?>
                        <option value="<?php echo $rowse['dieciocho'];?>" class="form-control"><?php echo $rowse['dieciocho'];?> </option>
                        <? } ?> 
                        <option>- - - Ingles - - - </option>
                        <?php $rese = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND trece ='ingles'");
                        while($rowse=mysqli_fetch_assoc($rese)) { ?>
                        <option value="<?php echo $rowse['dieciocho'];?>" class="form-control"> <?php echo $rowse['uno'];?> </option>
                        <? } ?> 
                        <option style="color:silver;">- - - Japones - - -</option>
                        <?php $rese = mysqli_query($conexion,"SELECT * FROM secciones WHERE dos ='activo' AND trece ='japones'");
                        while($rowse=mysqli_fetch_assoc($rese)) { ?>
                        <option value="<?php echo $rowse['dieciocho'];?>" class="form-control"> <?php echo $rowse['uno'];?> </option>
                        <? } ?> 
                    </select>
                </div>
                <div class="col-xs-12 col-sm-3 text-left">
                    <input type="text" name="cuatro" class="form-control" value=""  placeholder="Titulo">
                </div>
                <div class="col-xs-12 col-sm-2 text-left">
                    <input type="text" name="siete" class="form-control" value=""  placeholder="Subtitulo">
                </div>
                <div class="col-xs-12 col-sm-1 text-left">
                    <input type="hidden" name="cinco" class="form-control" value="secundario">
                    <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar</button>
                </div>
            </form>  
    <!--- AGREGAR --->



            <div class=" col-xs-12 text-left">
                <table width="100%" border="0" >
                <tr>

                    <!--- Lunes --->
                    <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> Lunes </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='lunes' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="lunes">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='lunes' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>



                    <!--- martes --->
                    <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> martes </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='martes' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="martes">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='martes' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>



                     <!--- miercoles --->
                     <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> miercoles </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='miercoles' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                   <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="miercoles">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='miercoles' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>



                     <!--- jueves --->
                     <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> jueves </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='jueves' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="jueves">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='jueves' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>


                     <!--- viernes --->
                     <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> viernes </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='viernes' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="viernes">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='viernes' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>



                     <!--- sabado --->
                     <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> sabado </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='sabado' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="sabado">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='sabado' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>


                    <!--- domingo --->
                    <td width="14.28%" valign="top" >
                    <div class="text-center" style="padding:5px;">
                    <h4 class="tipo" style="color:black;"> domingo </h4>
                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='domingo' ");
                    $num = mysqli_num_rows($re); if ($num <= 0 ) {?>
                    <form action="calendario_valida.php?cve=<?php echo $rowamen['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="uno" value="">  
                        <input type="hidden" name="dos" value="domingo">
                        <input type="hidden" name="tres" value="<?php echo $seccion;?>">
                        <input type="hidden" name="cuatro" value="">
                        <input type="hidden" name="cinco" value="principal"> 
                        <input type="hidden" name="seis" value=""> 
                        <input type="hidden" name="siete" value=""> 
                     <button type="submit" class="btn btn-default btn-block" value="Enviar"> Agregar </button>
                    </form> 
                    <?php } else { ?>
                        <? while($row=mysqli_fetch_assoc($re)) { ?>
                        <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="uno"  class="form-control text-center" value="<?php echo $row['uno'];?> ">  
                            <input type="hidden" name="dos"  value="<?php echo $row['dos'];?>">
                            <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                            <input type="hidden" name="cuatro" value="<?php echo $row['cuatro'];?>">
                            <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>"> 
                            <input type="hidden" name="seis" value="<?php echo $row['seis'];?>"> 
                            <input type="hidden" name="siete" value="<?php echo $row['siete'];?>">
                            <p stile="height:2px;"></p>
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                        </form>    
                        <? } ?> 
                    <? } ?> 
                    <p><br></p>

                    <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='domingo' ORDER BY seis ASC ");
                    while($row=mysqli_fetch_assoc($re)) { ?>
                    <form action="calendario_actualiza.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <input type="text" name="uno" class="form-control" value="<?php echo $row['uno'];?>">
                        </td><td width="30%" valign="top" >
                        <input type="text" name="seis" class="form-control" value="<?php echo $row['seis'];?>">
                        </td></tr></table>
                        <p stile="height:2px;"></p>
                        <input type="text" name="cuatro" class="form-control" value="<?php echo $row['cuatro'];?>">
                        <p stile="height:2px;"></p>
                        <input type="text" name="siete" class="form-control"value="<?php echo $row['siete'];?>">
                        <input type="hidden" name="dos" value="<?php echo $row['dos'];?>">
                        <input type="hidden" name="tres" value="<?php echo $row['tres'];?>">
                        <input type="hidden" name="cinco" value="<?php echo $row['cinco'];?>">
                        
                        <p stile="height:2px;"></p>
                    <table width="100%" border="0" ><tr><td width="70%" valign="top" >
                        <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar</button>
                    </form>  
                    </td><td width="30%" valign="top" >
                    <form action="calendario_elimina.php?cve=<?php echo $row['id'];?>&cve2=<?php echo $clave;?>" method="post" enctype="multipart/form-data">
                        <button type="submit" class="btn btn-danger btn-block" value="Enviar"> x </button>
                    </form>                     
                    </td></tr></table>
                    <hr>
                    <? } ?> 
                    </div> 
                    </td>

                </tr>
                </table>
            </div>  

    </div>   
    </div> 

</div>
</div>     