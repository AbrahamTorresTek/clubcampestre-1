<?php 
$seccion = $_GET['cve']; 
$renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' ");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>
  
<div style="">
<div class="containerrr">
<div class="row" style="padding:100px 20px 100px 20px;">

  <div class="col-xs-12 col-sm-12 text-center"> 
      <h2 class="tipo-2 color-1 mayusculas"> Activities Calendar </h2>
      <p style="height:20px;"></p>
  </div> 

<div class="col-xs-12 text-center ">

    <table width="95%" class="ocultar-movil" style="margin: 0 auto;" >
      <tr>
        <td width="14.28%" valign="top" >
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='lunes' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Monday <spam class="color-negro"> <?php echo $row['uno'];?> </spam> </h4>
            </div> 
          <? } ?> 
           <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='lunes' ORDER BY seis ASC ");
           $numlun = mysqli_num_rows($re);
           if ($numlun <= 0 ) { ?>
           <div style="width:100%; padding:10px;">
           <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
           WITHOUT ACTIVITY
           </div>
           </div> 
          <?php } else {
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?></h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
          <? } ?> 
          <? } ?> 
        </td>




       

        <td width="14.28%" valign="top" >
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='martes' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Tuesday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='martes' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
           <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?> 
        </td>


        <td width="14.28%" valign="top" >
        <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='miercoles' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Wednesday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='miercoles' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
            <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?> 
        </td>

        
        <td width="14.28%" valign="top" >
        <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='jueves' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Thursday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='jueves' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
            <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?>
        </td>


        <td width="14.28%" valign="top" >
        <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='viernes' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Friday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='viernes' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
            <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?>
        </td>


       

        <td width="14.28%" valign="top" > 
        <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='sabado' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Saturday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='sabado' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
            <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?>
        </td>


        <td width="14.28%" valign="top" >
        <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='domingo' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
              <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
              <h4 class="tipo-2"> Sunday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
              </div> 
            <? } ?> 
            <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='domingo' ORDER BY seis ASC ");
            $num = mysqli_num_rows($re);
            if ($num <= 0 ) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
            WITHOUT ACTIVITY
            </div>
            </div> 
            <?php } else {while($row=mysqli_fetch_assoc($re)) { ?>
              <div style="width:100%; padding:10px;">
              <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                  <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                  <p stile="height:10px;"></p>
                  <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                  <p stile="height:10px;"></p>
                  <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
              </div> 
              </div> 
            <? } ?> 
            <? } ?>

        </td>
      </tr>
    </table>

</div>

<!--- MOVIL ---->
  <div class="mostrar-movil" style="padding:30px;">
    
    <!--- LUNES ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='lunes' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='lunes' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Monday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='lunes' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 

    <!--- martes ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='martes' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='martes' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Tuesday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='martes' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 
    <!--- miercoles ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='miercoles' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='miercoles' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Wednesday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='miercoles' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 
    <!--- jueves ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='jueves' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='jueves' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Thursday  <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='jueves' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 
    <!--- viernes ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='viernes' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='viernes' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Friday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='viernes' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 
    <!--- sabado ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='sabado' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='sabado' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Saturday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='sabado' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 
    <!--- domingo ---->
    <?php $renum = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='domingo' ");
    $numero = mysqli_num_rows($renum);
    if ($numero <= 0 ) { } else { $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='principal' AND dos ='domingo' ");
          while($row=mysqli_fetch_assoc($re)) { ?>
            <div class="text-center" style="width:100%; border:solid 0px silver; border-radius:3px; padding:10px;">
                <h4 class="tipo-2"> Sunday <spam class="color-negro"><?php echo $row['uno'];?></spam> </h4>
            </div> 
          <? } ?> 
          <?php $re = mysqli_query($conexion,"SELECT * FROM calendario WHERE tres ='$seccion' AND cinco ='secundario' AND dos ='domingo' ORDER BY seis ASC ");
           while($row=mysqli_fetch_assoc($re)) { ?>
            <div style="width:100%; padding:10px;">
            <div class="text-center link-sombra" style="width:100%; border:solid 1px silver; border-radius:5px; padding:30px 20px 30px 20px;">
                <h3 class="tipo-2"> <?php echo $row['uno'];?> </h3>
                <p stile="height:10px;"></p>
                <div class="fondo-3 text-center" style="height:2px; width:70px; margin:auto;"></div>
                <p stile="height:10px;"></p>
                <p class="tipo color-2"> <?php echo $row['cuatro'];?> </p>
            </div> 
            </div> 
            <? } ?> 
            <? } ?> 


  </div>  
<!--- MOVIL ---->

    </div>  
</div>  
</div>  
</div>  
<? } ?> 