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
                  <a href="estilos.php">
                      <button class="btn btn-block btn-warning"> Agregar Estilos </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Estilos </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
    <div class="row">
        <div class=" col-xs-12 col-sm-8 text-left">












<!---CATALOGO ---->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped">
<?php $re = mysqli_query($conexion,"SELECT * FROM estilos ORDER BY id ");
while($row= mysqli_fetch_assoc($re)) { ?> 
<tr><td>

    <div class="row">
      
      <div class=" col-xs-12 col-sm-5 text-left">
      <p><br></p>
      <h3 class="colornegro tipo"><?php echo $row['uno'];?></h3>
          <table width="100%" class="">
            <td align="left">
              Estado:<?php echo $row['dos'];?>
              <p></p>
            </td>
<!--- NO SE VE 
            <td align="left">
              Categoria</br>
              <?php echo $row['seis'];?>
              <p></p>
            </td>
            <td align="left">
              Novedad:</br>
              <?php echo $row['siete'];?>
              <p></p>
            </td>
            <td align="left">
              Precio:</br>
              <?php echo $row['doce'];?>
              <p></p>
            </td>
NO SE VE ---->            
          </table>   
      </div>

      <div class=" col-xs-12 col-sm-5 text-left">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
          
          <td width="33%" align="center" valign="top">
            <img src="../estilos/<?php echo $row['f1'];?>" class="contain"> <p></p>
            <a href="estilos_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
<!--- NO SE VE       
          <td width="33%"align="center" valign="top">
            <img src="../catalogo/<?php echo $row['f2'];?>" class="contain"> <p></p>
            <a href="estilos_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          
          <td width="33%" align="center" valign="top">       
            <img src="../catalogo/<?php echo $row['f3'];?>" class="contain"> <p></p>
            <a href="estilos_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
NO SE VE ---->          
        </table>
      </div>
      
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="estilos_edita.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
        </a>
        <p></p>
        <a href="estilos_elimina.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Eliminar</button>
        </a>
        <p><br></p>
      </div>

    </div>

</td></tr>
<? } ?>
</table>
<!---CATALOGO ---->




    <!----- CONTENIDO ---->
            
            
            
            
    </div>          
  </div>  
<!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>