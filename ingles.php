<?php include("cabecera.php"); ?>
<body topmargin="0">

<header><!--- HEADER --->

  <!--- LOGO --->
    <?php include("eng-logo.php"); ?>
  <!--- LOGO --->


<!--- POP --->
<?php
$renum = mysqli_query($conexion,"SELECT * FROM pop WHERE tres ='inicio' ");
$numero = mysqli_num_rows($renum);
if ($numero <= 0 ) { ?>

<?php } else { ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">

            <?php
            $re = mysqli_query($conexion,"SELECT * FROM pop WHERE tres ='inicio' ");
            while($row=mysqli_fetch_assoc($re)) { ?>
                <img src="news/<?php echo $row['f1']; ?>" class="" style="object-fit:cover; width:100%; height:300px;  border-radius:2px;">
            <? } ?>
            
        <button type="button" class="btn btn-block btn-secondary tipo-2" data-dismiss="modal">CLOSE</button>

    </div>
  </div>
</div>
<? } ?>
<!--- POP --->


  <div class="sigue"><!--- SIGUE --->
    <!--- MENU --->
    <?php include("eng-menu.php"); ?>
  <!--- MENU --->
  </div><!--- TERMINA SIGUE --->

  <!--- BANNER ---->
    <?php include("baner.php"); ?>
  <!--- BANNER ---->

  <!--- NOSOTROS --->
    <?php include("eng-index-nosotros.php"); ?>
  <!--- NOSOTROS --->

  <!--- INDEX RESTAURANTES --->
    <?php include("eng-index-restaurantes.php"); ?>
  <!--- INDEX RESTAURANTES --->

  <!--- INDEX SECCIONES --->
    <?php include("eng-index-secciones.php"); ?>
  <!--- INDEX SECCIONES --->

  <!--- INDEX MAIL --->
    <?php include("eng-index-mail.php"); ?>
  <!--- INDEX MAIL --->

  <!--- INDEX NEW --->
  <?php include("eng-index-news.php"); ?>
  <!--- INDEX NEW --->

</header><!--- CIERRE HEADER --->

  <!--- Footer --->
  <?php include("eng-footer.php"); ?>
  <!--- Footer --->

  <!--- WHATS FLOTANTE --->
    <?php include("eng-whatsapp.php"); ?>
  <!--- WHATS FLOTANTE --->


</body>
</html>