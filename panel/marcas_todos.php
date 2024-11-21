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
                  <a href="marcas.php">
                      <button class="btn btn-block btn-warning"> Agregar Marcas </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Marcas </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
    <div class="row">
        <div class=" col-xs-12 col-sm-8 text-left">

<!--- BUSCADOR ---->
              <? include 'config.php';?>
                <form action="marcas_todos.php" method="get">
                  <div class="row">
                      <div class=" col-xs-12 col-sm-2 text-left">
                        <h4 class="tipo">Buscar Marca</h4>
                      </div> 
                      <div class=" col-xs-12 col-sm-2 text-left">    
                        <input type="text" name="palabra" class="form-control" value="<?  echo ($_GET["palabra"]);  ?>"  /><p></p>
                      </div>  
                              <div class=" col-xs-12 col-sm-2 text-left">
                        <input type="submit" name="buscador" class="btn btn-block btn-default" value="Buscar"  />
                         <p></p>
                      </div> 
                  </div>        
                </form>



      <div class="row">
        

              <? if ($_GET['buscador']) {
              $buscar = $_GET['palabra'];
              if (empty($buscar))
              { echo "No se ha ingresado ninguna palabra"; }
              else {
              $sql = "SELECT * FROM marcas WHERE uno LIKE '%$buscar%'";
              $result = mysql_query($sql,$connect);
              $total = mysql_num_rows($result);
              if ($row = mysql_fetch_array($result)) { echo "<h4>Total de resultados: $total </h4>"; do { ?>

              <!--- RESULTADOS ---->
                <table width="100%" class=" table table-striped">
                    <tr><td>
                        <div class="row">
                          
                          <div class=" col-xs-12 col-sm-5 text-left">
                          <p><br></p>
                          <h3 class="color1 tipo"><?php echo $row['uno'];?></h3>
                              <table width="100%" class="">
                                <td align="left">
                                  Estado:</br>
                                  <?php echo $row['dos'];?>
                                  <p></p>
                                </td>
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
                              </table>   
                          </div>

                          <div class=" col-xs-12 col-sm-5 text-left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
                              
                              <td width="33%" align="center" valign="top">
                                <img src="../marcas/<?php echo $row['f1'];?>" class="contain"> <p></p>
                                <a href="marcas_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                              <td width="33%"align="center" valign="top">
                                <img src="../marcas/<?php echo $row['f2'];?>" class="contain"> <p></p>
                                <a href="marcas_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                              <td width="33%" align="center" valign="top">       
                                <img src="../marcas/<?php echo $row['f3'];?>" class="contain"> <p></p>
                                <a href="marcas_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                            </table>
                          </div>
                          
                          <div class=" col-xs-12 col-sm-2 text-left">
                            <a href="marcas_edita.php?cve=<?php echo $row['id'];?>">
                              <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
                            </a>
                            <p></p>
                            <a href="marcas_elimina.php?cve=<?php echo $row['id'];?>">
                              <button class="btn btn-xs btn-default btn-block"> Eliminar</button>
                            </a>
                            <p><br></p>
                          </div>

                        </div> 
                    </td></tr>
                </table>
              <!--- RESULTADOS ---->

              <?php } while ($row = mysql_fetch_array($result)); }
                else { echo "No se encontraron resultados para: $buscar"; } } } ?>
        
      </div>
<!--- BUSCADOR ---->












<!---marcas ---->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped">
<?php $re = mysqli_query($conexion,"SELECT * FROM marcas ORDER BY id ");
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
            <img src="../marcas/<?php echo $row['f1'];?>" class="contain"> <p></p>
            <a href="marcas_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
<!--- NO SE VE       
          <td width="33%"align="center" valign="top">
            <img src="../marcas/<?php echo $row['f2'];?>" class="contain"> <p></p>
            <a href="marcas_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          
          <td width="33%" align="center" valign="top">       
            <img src="../marcas/<?php echo $row['f3'];?>" class="contain"> <p></p>
            <a href="marcas_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
NO SE VE ---->          
        </table>
      </div>
      
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="marcas_edita.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
        </a>
        <p></p>
        <a href="marcas_elimina.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Eliminar</button>
        </a>
        <p><br></p>
      </div>

    </div>

</td></tr>
<?php } ?>
</table>
<!---marcas ---->




    <!----- CONTENIDO ---->
            
            
            
            
    </div>          
  </div>  
<!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>