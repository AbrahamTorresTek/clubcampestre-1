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

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Usuarios </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


<!----- CONTENIDO ---->
<div class="row">
  <div class=" col-xs-12 col-sm-10 text-left">


    <form action="usuarios_agrega.php" method="POST" enctype="multipart/form-data">

      <div class=" col-xs-12 col-sm-4  text-left">
            <h4 class=" tipo">Usuario</h4> 
            <input type="text" name="usuario" required class="form-control" >
      </div>
      <div class=" col-xs-12 col-sm-4  text-left">
            <h4 class=" tipo">Contraseña</h4> 
            <input type="text" name="pass" required class="form-control" >
      </div>

      <div class=" col-xs-4 text-center">
            <h4 class=" tipo"> . </h4> 
            <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Agregar Usuario</button>
      </div> 
         
      </form>       

      <div class=" col-xs-4 text-center">
        <p><br></p>
      </div> 
  <!---usuarios ---->
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped">
  <?php $re = mysqli_query($conexion,"SELECT * FROM usuarios WHERE padre='no' ORDER BY id ");
  while($row= mysqli_fetch_assoc($re)) { ?> 
  <tr><td>

    <div class="row">
      
      <div class=" col-xs-12 col-sm-4 text-left">
      <p class="tipo">Usuario: <spam class="colornegro"> <?php echo $row['usuario'];?></spam></p>
      </div>
      <div class=" col-xs-12 col-sm-4 text-left">
      <p class="tipo">Password: <spam class="colornegro"> <?php echo $row['pass'];?></spam></p>
      </div>

      
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="usuarios_edita.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-default btn-block"> Modificar Info</button>
        </a>
      </div>
      <div class=" col-xs-12 col-sm-2 text-left">
        <a href="usuarios_elimina.php?cve=<?php echo $row['id'];?>">
          <button class="btn btn-default btn-block"> Eliminar</button>
        </a>
      </div>

    </div>

</td></tr>
<? } ?>
</table>
<!---usuarios ---->
 
            
    </div>          
  </div>  
<!-- CONTENIDO -->

        <?php include("footer.php") ?>

</body>
</html>