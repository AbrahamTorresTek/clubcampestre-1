<!---MAIL --->
<?php $refofoo = mysqli_query($conexion,"SELECT * FROM imagenes WHERE tipo ='fondo-whats'"); 
$rowfofoo = mysqli_fetch_array($refofoo);?>
<div class="fondo-2" style=" background-image: url(imagenes/<?php echo $rowfofoo['foto'];?>);
background-position: center center;
background-repeat: repeat; ">
<div class="container" style="padding:100px 50px 100px 50px;">
<div class="row">

  <div class="col-xs-12 col-sm-12 text-center">  
    <h3 class="tipo-2 sombra-texto mayusculas">subscribe to our newsletter</h3>
    <p style="height:5px;"></p>
  </div> 

    <?php if (!isset($_POST['email'])) { ?>  
  
    <form action="<?=$_SERVER['PHP_SELF']?>#mail" method="post">  
      <div class=" col-xs-12 col-sm-3 col-sm-offset-1 text-center" style="padding:5px;" >
        <input type="text" placeholder="NAME" name="nombre" id="email" required class="form-control tipo-2"  width="100%" style="background-color: transparent; color:white;">
      </div>
      <div class=" col-xs-12 col-sm-3 text-center" style="padding:5px;">  
        <input type="text" placeholder="MAIL" name="email" id="email" required class="form-control tipo-2"  width="100%" style="background-color: transparent; color:white">
      </div>   
      <div class=" col-xs-12 col-sm-2 text-center" style="padding:5px;">  
        <input type="text" placeholder="PARTNER ID" name="id" id="id" required class="form-control tipo-2"  width="100%" style="background-color: transparent; color:white">
      </div>   
      <div class=" col-xs-12 col-sm-2 text-center" style="padding:5px;">  
        <input type="submit" class="btn btn-btn1 btn-block contorno-color-3 tipo-2 mayusculas" onclick="MM_validateForm('email','','R');return document.MM_returnValue" value=" sign up " />
      </div>   
    </form>     

    <?php }else{  
    include("conectarse.php");
    $uno = $_POST['email'];
    $inserta = mysqli_query($conexion , "INSERT INTO `mail` ( `id`,  `uno` ) VALUES ( NULL ,'$uno');");
    echo   mysqli_error();
    if ($inserta);

    // Mail  
    $titulo = 'Nuevo registro para Mailing';
        $mensaje ='
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>

        <body>
        <p>&nbsp;</p>
        <p>Nuevo Correo para Mailing !</p>
        <p>'.$uno.'</p>
        </body>
        </html> ';
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $cabeceras .= 'From: Mailing Pagina Web ';
        mail("artwebmx@hotmail.com", $titulo, $mensaje, $cabeceras);
    // Mail  
    ?>

    <div class=" col-xs-12 col-sm-6 col-sm-offset-3 text-center">
              <p><br><br></p>
              <h2 class="tipo color-blanco">Email entered correctly</h2>
              <h4 class="tipo color-2">Soon you will receive in your mail <?php echo $uno ;?></h4>
              <h2 class="tipo color-blanco" >Promotions and discounts</h2>
              <p></p>
    </div>   

    <?php } ?>

</div> 
</div> 
</div> 
<!---MAIL --->
