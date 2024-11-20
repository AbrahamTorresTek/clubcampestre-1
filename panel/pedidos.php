<?php include("cabezera.php");?>

<body>

    <div class="wrapper">
        <!-- LATERAL -->
        <?php  include("admin.php"); ?>
        <!-- LATERAL -->
           
        <div id="content">
        <div class="row">
           
        <!-- BOTON CERRAR -->
          <div class=" col-xs-5 col-sm-1 text-left">
            <button type="button" id="sidebarCollapse" class="btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>

          <div class=" col-xs-12 col-sm-4 text-left">
            <h4 class="tipo color"> OCULTAR MENU</h4>
          </div>
        <!-- BOTON CERRAR -->

        <div class=" col-xs-12 text-center">
          <hr>
        </div>

        <!-- EXPORTAR -->
              <div class=" col-xs-12 col-sm-6">
                <div class="row">
                  <form id="form1" name="form1" method="post" action="muestra_excel.php">

                      <div class=" col-sm-12 ">
                      <h4 class="tipo colornegro">Exportar Pedidos en Exel</h4>
                      </div>

                      <div class=" col-xs-12 col-sm-4 text-left tipo">
                        <input type="date" name="inicial" id="inicial" class="form-control" />
                        Fecha Inicial
                      </div>

                      <div class=" col-xs-12 col-sm-4 text-left tipo">
                        <input type="date" name="final" id="final" class="form-control" />
                        Fecha Final: 
                      </div>

                      <div class=" col-xs-12 col-sm-3 text-left">
                        <input type="submit" name="btnfiltrar" id="btnfiltrar" value="Descargar Exel" class="btn btn-block btn-warning" />
                        <br>
                      </div>

                  </form>
                </div>
             </div>
            <!-- EXPORTAR -->

            <!-- BUSCAR -->
            <div class=" col-xs-12 col-sm-4">
              <div class="row">

                <form action="pedidos.php" method="get">
                
                  <div class=" col-xs-12 col-sm-12 text-left">
                    <h4 class="tipo colornegro">Buscar Folio</h4><? include '../conectarse.php'; ?>
                  </div>

                  <div class=" col-xs-12 col-sm-7 text-left">    
                    <input type="text" name="palabra" class="form-control" value="<?  echo ($_GET["palabra"]);  ?>"  />
                  </div>  
        
                  <div class=" col-xs-12 col-sm-5 text-left">
                    <input type="submit" name="buscador" class="btn btn-block btn-warning" value="Buscar"  />
                  </div> 
      
                </form>
              </div>
            </div>  
            <!-- BUSCAR -->
            
            <div class=" col-xs-12 text-center">
              <p><br></p>
            </div>
      </div>             
<!-- ACCIONES -->


<!----- CONTENIDO ---->
<div class="row">
  <div class=" col-xs-12 col-sm-10 text-left">

    <table width="100%" class="table table-striped">
      <tr>
        <th width="20%" class="tipo colornegro">Fecha</th>
        <th width="20%" class="tipo colornegro">Cliente</th>
        <th width="20%" class="tipo colornegro">Folio</th>
        <th width="20%" class="tipo colornegro">Total</th>
        <th width="20%" class="tipo colornegro"></th>
      </tr>  
    </table> 


<!--- BUSCADOR ---->
<? 
if ($_GET['buscador'])
{
$buscar = $_GET['palabra'];
if (empty($buscar))
{
echo "No se ha ingresado ninguna palabra";
}
else
{
$sql = "SELECT * FROM pedidos WHERE folio LIKE '%$buscar%'";
$result = mysqli_query($conexion , $sql);
$total = mysqli_num_rows($result);
if ($row = mysqli_fetch_array($result)) {
echo " Total de resultados: $total <p></p>";
do {
?>

<table width="100%" class="table">
              <tr>
              <th class="tipo" width="20%"><?php echo $row['fecha'];?> </th>
              <th class="tipo" width="20%"><?php echo $row['cliente'];?> </th>
              <th class="tipo color1" width="20%"><?php echo $row['folio'];?></th>
             <th class="tipo" width="20%"><?php echo $row['total'];?> </th>
              <th class="tipo" width="20%">
                                <a href="../pedido.php?clave=<?php echo $row['folio'];?>" target="_blank">
                                <button class="btn btn-xs btn-default btn-block"> Ver Detalles</button>
                                </a>
                              </th>
              </tr>    
</table> 



<?
}
while ($row = mysqli_fetch_array($result));
}
else
{
echo "No se encontraron resultados para: $buscar";
}
}
}
?>

<!--- BUSCADOR ---->

        <table width="100%" class="table table-striped">
          <?php $re = mysqli_query($conexion,"SELECT * FROM pedidos ORDER BY fecha DESC limit 50");
                      while($row= mysqli_fetch_assoc($re)) { ?> 

              <tr>
                              <th width="20%" class="tipo"><?php echo $row['fecha'];?> </th>
                              <th width="20%" class="tipo"><?php echo $row['cliente'];?> </th>
                              <th width="20%" class="tipo color2"><?php echo $row['folio'];?></th>
                              <th width="20%" class="tipo"><?php echo $row['total'];?> </th>
                              <th width="20%" class="tipo">
                                <a href="../pedido.php?clave=<?php echo $row['folio'];?>" target="_blank">
                                <button class="btn btn-xs btn-default btn-block"> Ver Detalles</button>
                                </a>
                              </th>
              </tr>      
          <? } ?>      
        </table> 












</div>
</div>
<!----- CONTENIDO ---->

	<?php include("footer.php") ?>

</body>
</html>