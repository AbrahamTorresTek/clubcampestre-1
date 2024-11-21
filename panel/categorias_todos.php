<?php include("cabezera.php");?>

<body class="tipo">

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
                  <a href="categorias.php">
                      <button class="btn btn-block btn-warning"> Agregar categorias </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> categorias </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
    <div class="row">
        <div class=" col-xs-12 col-sm-12 text-left">


              <?php include '../conectarse.php';?>
                <form action="categorias_todos.php" method="get">
                  <div class="row">
                      <div class=" col-xs-12 col-sm-2 text-left">
                        <h4 class="tipo">Buscar Categoria</h4>
                      </div> 
                      <div class=" col-xs-12 col-sm-2 text-left">    
                        <input type="text" name="palabra" class="form-control" value="<?php echo ($_GET["palabra"]);  ?>"  /><p></p>
                      </div>  
                              <div class=" col-xs-12 col-sm-2 text-left">
                        <input type="submit" name="buscador" class="btn btn-block btn-default" value="Buscar"  />
                         <p></p>
                      </div> 
                  </div>        
                </form>



      
        

              <?php if ($_GET['buscador']) {
              $buscar = $_GET['palabra'];
              if (empty($buscar))
              { echo "No se ha ingresado ninguna palabra"; }
              else {
              $sql = "SELECT * FROM categorias WHERE  uno LIKE '%$buscar%'";
              $result = mysqli_query($conexion,$sql);
              $total = mysqli_num_rows($result);
              if ($row = mysqli_fetch_array($result)) { echo "<h4>Total de resultados: $total </h4>"; do { ?>
              <!--- RESULTADOS ---->

              <table width="100%" class=" table table-striped tipo">
                    <tr><td>
                        <div class="row">
                          
                        <div class=" col-xs-12 col-sm-5 text-left">
                        <p><br></p>
                        <h3 class="color1 tipo"><?php echo $row['uno'];?></h3>
                            <table width="100%" class="">
                              <td width="50%" align="left">
                                Estado:</br>
                                <?php echo $row['dos'];?>
                                <p></p>
                              </td>
                              <td width="50%" align="left">
                                Tipo</br>
                                <?php echo $row['cuatro'];?>
                                <p></p>
                              </td>
                            </table>   
                        </div>

                          <div class=" col-xs-12 col-sm-5 text-left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
                              
                              <td width="33%" align="center" valign="top">
                                <img src="../categorias/<?php echo $row['f1'];?>" class="contain"> <p></p>
                                <a href="categorias_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                              <td width="33%"align="center" valign="top">
                                <img src="../categorias/<?php echo $row['f2'];?>" class="contain"> <p></p>
                                <a href="categorias_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                              <td width="33%" align="center" valign="top">       
                                <img src="../categorias/<?php echo $row['f3'];?>" class="contain"> <p></p>
                                <a href="categorias_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
                              </td>
                              
                            </table>
                          </div>
                          
                          <div class=" col-xs-12 col-sm-2 text-left">
                            <a href="categorias_edita.php?cve=<?php echo $row['id'];?>">
                              <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
                            </a>
                            <p></p>

                            <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="categorias_elimina.php?cve=<?php echo $row['id'];?>">
                            <button class="btn btn-danger btn-block"> Si Eliminar </button>
                            </a>
                            </div>

                        </div> 

                    </td></tr>
                </table>
              <!--- RESULTADOS ---->

              <?php } while ($row = mysqli_fetch_array($result)); }
                else { echo "No se encontraron resultados para: $buscar"; } } } ?>
        
     













<!--- categorias PRINCIPALES --->
<h4 class="tipo color1"> PRINCIPALES </h4>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped table-border">
<?php $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE cinco='editable' AND diez='principal' ORDER BY id DESC ");
while($row= mysqli_fetch_assoc($re)) { ?> 
<tr><td>

    <div class="row">
      
      <div class=" col-xs-12 col-sm-5 text-left">
      <p id="<?php echo $row['id'];?>"></p>
      <h3 class="colornegro tipo"><?php echo $row['uno'];?></h3>
         
      <table width="100%" class="tipo">
            <td align="left" width="33%">
              Estado:</br>
              <?php echo $row['dos'];?>
              <p></p>
            </td>
            <td align="left" width="33%">
              Lugar en el menu </br>
              <?php echo $row['cuatro'];?>
              <p></p>
            </td>
            <td align="left" width="34%">
              Tipo Menu </br>
              <?php echo $row['diez'];?>
              <p></p>
            </td>
          </table>  

      </div>

      <div class=" col-xs-12 col-sm-5 text-left">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
          
          <td width="33%" align="center" valign="top">
            <img src="../categorias/<?php echo $row['f1'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          <!--- NOVE    
          <td width="33%"align="center" valign="top">
            <img src="../categorias/<?php echo $row['f2'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          <td width="33%" align="center" valign="top">       
            <img src="../categorias/<?php echo $row['f3'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>    
          NOVE --->     
        </table>
      </div>
      
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="categorias_edita.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
        </a>
        <p></p>
        <div class="dropdown">
          <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eliminar
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a href="categorias_elimina.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-danger btn-block"> Si Eliminar </button>
          </a>
          </div>
      </div>

    </div>

</td></tr>
<?php } ?>
</table>
<!--- categorias PRINCIPALES --->








<!---categorias SECUNDARIAS ---->
<h4 class="tipo color1"> SECUNDARIAS </h4>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped table-border ">
<?php $re = mysqli_query($conexion,"SELECT * FROM categorias WHERE cinco='editable' AND diez='secundario' ORDER BY id DESC ");
while($row= mysqli_fetch_assoc($re)) { ?> 
<tr><td>

    <div class="row">
      
      <div class=" col-xs-12 col-sm-5 text-left">
      <p id="<?php echo $row['id'];?>"></p>
      <h3 class="colornegro tipo"><?php echo $row['uno'];?></h3>
         
      <table width="100%" class="tipo">
            <td align="left" width="33%">
              Estado:</br>
              <?php echo $row['dos'];?>
              <p></p>
            </td>
            <td align="left" width="33%">
              Lugar en el menu </br>
              <?php echo $row['cuatro'];?>
              <p></p>
            </td>
            <td align="left" width="34%">
              Tipo Menu </br>
              <?php echo $row['diez'];?>
              <p></p>
            </td>
          </table>  

      </div>

      <div class=" col-xs-12 col-sm-5 text-left">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
          
          <td width="33%" align="center" valign="top">
            <img src="../categorias/<?php echo $row['f1'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          <td width="33%"align="center" valign="top">
            <img src="../categorias/<?php echo $row['f2'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_2.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>
          <td width="33%" align="center" valign="top">       
            <img src="../categorias/<?php echo $row['f3'];?>" class="contain"> <p></p>
            <a href="categorias_edita_foto_3.php?cve=<?php echo $row['id'];?>"><button class="btn btn-xs btn-default"> Cambiar imagen</button></a><p></p>
          </td>      
        </table>
      </div>
      
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="categorias_edita.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
        </a>
        <p></p>
        <div class="dropdown">
          <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Eliminar
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a href="categorias_elimina.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-danger btn-block"> Si Eliminar </button>
          </a>
          </div>
      </div>

    </div>

</td></tr>
<?php } ?>
</table>
<!---categorias SECUNDARIAS ---->






<!----- CONTENIDO ---->
            
            
            
            
    </div>          
  </div>  
<!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>