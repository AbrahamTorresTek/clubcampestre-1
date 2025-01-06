<?
  // No almacenar en el cache del navegador esta pagina.
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");             		// Expira en fecha pasada
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");		// Siempre p�gina modificada
		header("Cache-Control: no-cache, must-revalidate");           		// HTTP/1.1
		header("Pragma: no-cache");                                   		// HTTP/1.0
?>
<html>
<head>  
  
  <meta charset="UTF-8">
  <meta name="description" content="Grupo Autossoni Movilidad en un Cl">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>N360 Admin</title>
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/estilos.css">
  <link rel="icon" href="icono.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="icono.ico" type="image/x-icon" />

  <style type="text/css">

        #video_background {
        position: absolute;
        bottom: 0px;
        right: 0px;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1000;
        overflow: hidden;
        }
        #video_pattern {
        background:#fff;
        position: fixed;
        opacity: 0.8;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 1;
        }
     
      .fondo_blanco {
        background-color: #FFF;
        padding: 15px ;
        margin-top: 35%;
        -webkit-box-shadow: 0px -1px 13px -2px rgba(0,0,0,0.80);
        -moz-box-shadow: 0px -1px 13px -2px rgba(0,0,0,0.80);
        box-shadow: 0px -1px 13px -2px rgba(0,0,0,0.80);
      }  
  </style>


  <title>Administrador</title>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.smoove.js"></script>
  <script>$('.block').smoove({offset:'40%'});</script>

</head>

<body>
  <div class="row">
    <div class="container">

      <div class="col-xs-12  col-sm-12  col-md-4 col-md-offset-4  text-center ">
      <div class="fondo_blanco">  
          <p><br></p>
          <img src="https://rtasoftware.com.mx/c1e3116d90ffecf82e03.png" width="60%">
          <p></p>
          <h2 class="tipo" > Bienvenido  </h2>
          <p><br></p>
          <form action="pag1_restringido.php" method="post">

            <h4 class="tipo"> Usuario </h4>
            <input type="text" name="user"  class="form-control" required >
            <p></p>
            <h4 class="tipo">Password</h4>
            <input type="password" name="pass"  class="form-control"  required >
            <p></p>
            <button name="submit" type="submit" type="button" class="btn btn-default btn-block">Entrar</button>
            <p><hr></p>
          </form>

            <a href="../contacto.php"> <button class="btn btn-default btn-block "> Regresar a Web </button></a>
            <p></p>
      </div>
      </div>

    </div>  
  </div>


</body>
</html>
