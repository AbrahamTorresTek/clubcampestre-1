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
                  <a href="blog.php">
                      <button class="btn btn-block btn-warning"> Agregar Articulo </button>
                  </a>
                </div>

                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
    <div class="row">
        <div class=" col-xs-12 col-sm-12 text-left">


              <? include '../conectarse.php';?>
                <form action="blog_todos.php" method="get">
                  <div class="row">
                      <div class=" col-xs-12 col-sm-2 text-left">
                        <h4 class="tipo">Buscar Categoria</h4>
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



      
        

              <? if ($_GET['buscador']) {
              $buscar = $_GET['palabra'];
              if (empty($buscar))
              { echo "No se ha ingresado ninguna palabra"; }
              else {
              $sql = "SELECT * FROM blog WHERE  uno LIKE '%$buscar%'";
              $result = mysqli_query($conexion,$sql);
              $total = mysqli_num_rows($result);
              if ($row = mysqli_fetch_array($result)) { echo "<h4>Total de resultados: $total </h4>"; do { ?>
              <!--- RESULTADOS ---->

          <table width="100%" class=" table table-striped tipo">
          <tr><td>

              <div class=" col-xs-12 col-sm-5 text-left">
                <h3 class="color1 tipo"><?php echo $row['uno'];?></h3>
                <p>
                  Estado: <?php echo $row['dos'];?> <br>
                  Seccion: <?php echo $row['cuatro'];?> <br>
                  Tipo: <?php echo $row['tres'];?>
                </p>
              </div>

              <div class=" col-xs-12 col-sm-2 text-center">
                <img src="../blog/<?php echo $row['f1'];?>" class="contain">
              </div>

              <div class=" col-xs-12 col-sm-2 text-center">
                <a href="blog_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-default btn-block"> Cambiar imagen</button></a><p></p>
                  <p></p>
                <a href="blog_edita.php?cve=<?php echo $row['id'];?>">
                    <button class="btn btn-default btn-block"> Modificar Info</button>
                </a>
                  <p></p>
                <div class="dropdown">
                  <button class="btn btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eliminar
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a href="blog_elimina.php?cve=<?php echo $row['id'];?>">
                        <button class="btn btn-danger btn-block"> Si Eliminar </button>
                      </a>
                  </div>
                </div>
              </div> 

          </td></tr>
          </table>

        <!--- RESULTADOS ---->

              <?php } while ($row = mysqli_fetch_array($result)); }
                else { echo "No se encontraron resultados para: $buscar"; } } } ?>
        
     













<!---blog ---->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped">
<?php $re = mysqli_query($conexion,"SELECT * FROM blog ORDER BY id ");
while($row= mysqli_fetch_assoc($re)) { ?> 
<tr><td>

    <div class="row">
      
    <div class=" col-xs-12 col-sm-5 text-left">
                <h3 class="colornegro tipo"><?php echo $row['uno'];?></h3>
                <p id="<?php echo $row['id'];?>">
                  Estado: <?php echo $row['dos'];?> <br>
                  Seccion: <?php echo $row['cuatro'];?> <br>
                  Tipo: <?php echo $row['tres'];?>
                </p>
              </div>

              <div class=" col-xs-12 col-sm-2 text-center">
                <img src="../blog/<?php echo $row['f1'];?>" class="contain">
              </div>

              <div class=" col-xs-12 col-sm-2 text-center">
                <a href="blog_edita_foto_1.php?cve=<?php echo $row['id'];?>"><button class="btn btn-default btn-block"> Cambiar imagen</button></a><p></p>
                  <p></p>
                <a href="blog_edita.php?cve=<?php echo $row['id'];?>">
                    <button class="btn btn-default btn-block"> Modificar Info</button>
                </a>
                  <p></p>
                <div class="dropdown">
                  <button class="btn btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eliminar
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a href="blog_elimina.php?cve=<?php echo $row['id'];?>">
                        <button class="btn btn-danger btn-block"> Si Eliminar </button>
                      </a>
                  </div>
                </div>
              </div> 

</td></tr>
<?php } ?>
</table>
<!---blog ---->




    <!----- CONTENIDO ---->
            
            
            
            
    </div>          
  </div>  
<!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>