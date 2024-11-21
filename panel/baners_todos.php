<?php include("cabezera.php");?>

<body>

    <div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        

        <!-- CONTENIDO -->
        <div id="content">
          
           <!-- BOTON CERRAR -->
           <div class="row">

              <div class=" col-xs-12 col-sm-1 text-left">
                <button type="button" id="sidebarCollapse" class="btn">
                                <span></span>
                                <span></span>
                                <span></span>
                </button>
              </div>

              <div class=" col-xs-12 col-sm-4 text-left">
                <h4 class="tipo color"> OCULTAR MENU</h4>
              </div>

              <div class=" col-xs-12 ">
                <hr>
              </div>

              <div class=" col-xs-12 col-sm-3 text-left">
                <a href="baner.php">
                    <button class="btn btn-block btn-warning"> Agregar Banner</button>
                </a>
              </div>

              <div class=" col-xs-12 ">
                <br>
              </div>

            </div>  
          <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
    <div class="row">
        <div class=" col-xs-12 col-sm-10 text-left">



<!----- ESCRIOTRIO ---->        
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tipo table table-striped">

<tr>
  <td width="60%" align="left">Imagen Escritorio - <small>Medida recomendada 1500 x 600 px</small></td>
  <td width="10%" align="left">Estado</td>
  <td width="10%" align="left">Tipo</td>
  <td width="10%" align="left"></td>
  <td width="10%" align="left"></td>
</tr>

<?php $re = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo='principal' ");
while($row = mysqli_fetch_assoc($re)) { ?>   
<tr>
  <td align="left"><img src="../baner/<?php echo $row['foto'];?>" width="95%" ></td>
  <td align="left"><p><?php echo $row['estado'];?></p></td>
  <td align="left"><p><?php echo $row['tipo'];?></p></td>
  <td align="left"><p></p></td>
  <td align="right">
      <a href="baners_edita.php?cve=<?php echo $row['id'];?>">
      <button class="btn btn-default btn-block"> Activar / Desactivar </button>
      </a>
      <p></p>
      <a href="baners_edita_foto.php?cve=<?php echo $row['id'];?>">
      <button class="btn  btn-default btn-block"> Modificar Img</button>
      </a>
      <p></p>
      <a href="baners_elimina.php?cve=<?php echo $row['id'];?>">
      <button class="btn  btn-danger btn-block"> Eliminar</button>
      </a>
  </td>
</tr>
<?php } ?>  

<!----- MOVIL ---->   
<tr>
  <td width="60%" align="left">Imagen Celular - <small>Medida recomendada 400 x 600 px</small></td>
  <td width="10%" align="left">Estado</td>
  <td width="10%" align="left">Tipo</td>
  <td width="10%" align="right"></td>
  <td width="10%" align="right"></td>
</tr>

<?php $re = mysqli_query($conexion,"SELECT * FROM banners WHERE tipo='principal-movil' ");
while($row = mysqli_fetch_assoc($re)) { ?>   
<tr>
  <td align="left"><img src="../baner/<?php echo $row['foto'];?>" width="20%" ></td>
  <td align="left"><p><?php echo $row['id'];?></p> </td>
  <td align="left"><p><?php echo $row['estado'];?></p></td>
  <td align="right">
      <a href="baners_edita.php?cve=<?php echo $row['id'];?>">
      <button class="btn btn-default btn-block"> Activar / Desactivar </button>
      </a>
      <p></p>
      <a href="baners_edita_foto.php?cve=<?php echo $row['id'];?>">
      <button class="btn  btn-default btn-block"> Modificar Img</button>
      </a>
      <p></p>
      <a href="baners_elimina.php?cve=<?php echo $row['id'];?>">
      <button class="btn  btn-danger btn-block"> Eliminar</button>
      </a>
  </td>
</tr>
<?php } ?>  

</table>
<!----- SECUENDARIO ---->   


</div>
<!----- CONTENIDO ---->

        </div>  
        <!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>