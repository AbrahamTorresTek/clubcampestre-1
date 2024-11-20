<?php
$seccion = $_GET['cve'];
$query = "SELECT id FROM secciones WHERE dieciocho = '$seccion'";
$resultado = mysqli_query($conexion, $query);
$rowidsec = mysqli_fetch_array($resultado);
$idsec = $rowidsec['id'];
$renum = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='pop'");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>
<?php } else { ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="padding-top:25px;">
    <div class="modal-content text-center">
    <button type="button" style="width:200px; background-color:transparent;" class="btn btn-btn1 btn-block tipo-2" data-dismiss="modal">CERRAR</button>
    <p></p>

      <!--- ESCRITORIO --->
      <div class="ocultar-movil">
            <?php
            $re = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='pop'  AND tipo='escritorio' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
                <img src="modulos/<?php echo $row['f1']; ?>" id="un-poco-zoom" class="" style="object-fit:contain; width:100%; height:400px;  border-radius:0px;">
            <? } ?>
      </div>
      <!--- MOVIL --->
      <div class="mostrar-movil">
            <?php
            $rem = mysqli_query($conexion,"SELECT * FROM modulos WHERE seccion ='$idsec' AND modulo='pop'  AND tipo='celular' ");
            while($rowm=mysqli_fetch_assoc($rem)) { ?>
                <img src="modulos/<?php echo $rowm['f1']; ?>" id="un-poco-zoom" class="" style="object-fit:contain; width:100%; height:400px;  border-radius:0px;">
            <? } ?>
      </div>

    </div>
  </div>
</div>
<? } ?>


