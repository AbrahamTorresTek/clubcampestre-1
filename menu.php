<!--- MENU --->
<nav class="navbar navbar-default tipo">
<div class="" style="padding: 0px 1px 0px 1px;">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed btn-block" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only tipo-2">Toggle navigation</span>
                MENU
            </button>
        </div>

<!--- MOVIL --->
        <div class="col-sm-12 mostrar-movil tipo-2">
        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1"  style="padding:10px 0px 10px 0px;">

               <div class="" style="padding:10px;"><a href="ingles.php">INICIO</a></div>
                <!------- Seccion Izquierda ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_izquierdo' AND cinco='editable' AND dos ='activo' AND trece ='espanol' order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <div class="" style="padding:5px;"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></div>
                <?php } ?>

                <!------- Categoria Izquierda ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM categorias WHERE cuatro ='menu_izquierdo' AND dos ='activo' AND trece ='espanol'  order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <div class="" style="padding:5px;"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></div>
                <?php } ?>

                <!--- CASA CLUB --->
                <div style="padding:10px;">
                    <a class="" type="" data-toggle="collapse" data-target="#clubh" aria-expanded="false" aria-controls="clubh">
                    CASA CLUB <span class="caret color-4"></span>
                    </a>
                    <div class="collapse" id="clubh">
                        <div class="card card-body">
                        <div class="contorno-color-3" style="padding:5px">
                            <?php 
                                $catsec = $rowcatt['dieciocho'];
                                $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='casa-club' AND trece ='espanol' order by id");
                                while ($row = mysqli_fetch_assoc($re)) { ?>
                                    <div class="" style="padding:5px;">
                                        <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                            <?php echo $row['uno']; ?>
                                        </a>
                                    </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>

                
                
                </div>


                <!--- GOLF --->
                <div style="padding:10px;">
                <a class="" type="" data-toggle="collapse" data-target="#golf" aria-expanded="false" aria-controls="golf">
                GOLF <span class="caret color-4"></span>
                </a>
                <div class="collapse" id="golf">
                <div class="card card-body">
                <div class="contorno-color-3" style="padding:5px">
                    <?php 
                    $catsec = $rowcatt['dieciocho'];
                    $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='golf' AND trece ='espanol' order by id");
                    while ($row = mysqli_fetch_assoc($re)) { ?>
                            <div class="" style="padding:5px;">
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </div>
                    <?php } ?>
                </div>
                </div>
                </div>
                </div>

                <!--- RESTAURANT --->
                <div style="padding:10px;">
                <a class="" type="" data-toggle="collapse" data-target="#restaurante" aria-expanded="false" aria-controls="restaurante">
                RESTAURANTES <span class="caret color-4"></span>
                </a>
                <div class="collapse" id="restaurante">
                <div class="card card-body">
                <div class="contorno-color-3" style="padding:5px">
                    <?php 
                    $catsec = $rowcatt['dieciocho'];
                    $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='restaurants' AND trece ='espanol' order by id");
                    while ($row = mysqli_fetch_assoc($re)) { ?>
                            <div class="" style="padding:5px;">
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </div>
                    <?php } ?>
                </div>
                </div>
                </div>
                </div>

                <!--- SOCILAES --->
                <div style="padding:10px;">
                <a class="" type="" data-toggle="collapse" data-target="#social" aria-expanded="false" aria-controls="social">
                SOCIAL <span class="caret color-4"></span>
                </a>
                <div class="collapse" id="social">
                <div class="card card-body">
                <div class="contorno-color-3" style="padding:5px">
                    <?php 
                    $catsec = $rowcatt['dieciocho'];
                    $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='sociales' AND trece ='espanol' order by id");
                    while ($row = mysqli_fetch_assoc($re)) { ?>
                            <div class="" style="padding:5px;">
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </div>
                    <?php } ?>
                </div>
                </div>
                </div>
                </div>

                <!------- Seccion Derecha ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_derecho' AND cinco='editable' AND dos ='activo' AND trece ='espanol' order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <div class="" style="padding:5px;"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></div>
                <?php } ?>

                <!------- Categoria Derecha ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM categorias WHERE cuatro ='menu_derecho' AND dos ='activo' AND trece ='espanol' order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <div class="" style="padding:5px;"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></div>
                <?php } ?>

                <div class="" style="padding:5px;"><a href="contacto.php" target="">CONTACTO</a></div>

                <!--- IDIOMA --->
                <div style="padding:10px;">
                <a class="" type="" data-toggle="collapse" data-target="#idioma" aria-expanded="false" aria-controls="idioma">
                IDIOMA <span class="caret color-4"></span>
                </a>
                <div class="collapse" id="idioma">
                <div class="card card-body">
                <div class="contorno-color-3" style="padding:5px">
                    <div class="" style="padding:5px;"><a href="ingles.php" style="padding:10px;">ENGLISH</a></div>
                    <div class="" style="padding:5px;"><a href="https://clubleoncampestre-com.translate.goog/index.php?_x_tr_sl=es&_x_tr_tl=ja&_x_tr_hl=es&_x_tr_pto=wapp" style="padding:10px;" target="_blanck">日本</a></div>
                </div>
                </div>
                </div>
                </div>
                
        </div>
        </div>
<!--- MOVIL --->




        <div class="col-sm-12 ocultar-movil" style="padding:5px 0px 5px 0px;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-------------------- Izquierdo ---------------------->
            <ul class="nav navbar-nav navbar-left">
            </ul>
            <!-------------------- izquierdo ---------------------->

             <!-------------------- Derecho ---------------------->
            <ul class="nav navbar-nav navbar-right">
            </ul>
            <!-------------------- Derecho ---------------------->

            <!-------------------- Centro ---------------------->
            <ul class="nav navbar-nav" style="display:flex; justify-content:center;">

                <li class="tipo-2"><a href="index.php">INICIO</a></li> 
                
                <!------- Seccion Izquierda ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_izquierdo' AND cinco='editable' AND dos ='activo' AND trece ='espanol' order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <li class="tipo-2"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></li>
                <?php } ?>
                
                <!------- Categoria Izquierda ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM categorias WHERE cuatro ='menu_izquierdo' AND dos ='activo' AND trece ='espanol'  order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <li class="tipo-2"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></li>
                <?php } ?>
                


                <!--- CASA CLUB --->
                <li class="dropdown tipo-2">
                    <div style="padding:12px 10px 10px 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    CASA CLUB <span class="caret color-4"></span>
                    </div>
                    <div class="dropdown-menu" style="">
                    <ul class="dropdown-menu sombra">
                        <?php 
                        $catsec = $rowcatt['dieciocho'];
                        $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='casa-club' AND trece ='espanol' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                            <li class="tipo-2"> 
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <!--- NOVE
                        <li class="tipo-2" style="border-top:solid 1px WhiteSmoke;"> 
                            <a href="casa-club.php" style="padding:10px;">
                            VER MAS
                            </a>
                        </li>
                        NOVE --->
                    </ul>
                </li>

                <!--- GOLF --->
                <li class="dropdown tipo-2">
                    <div style="padding:12px 10px 10px 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    GOLF <span class="caret color-4"></span>
                    </div>
                    <div class="dropdown-menu" style="">
                    <ul class="dropdown-menu sombra">
                        <?php 
                        $catsec = $rowcatt['dieciocho'];
                        $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='golf' AND trece ='espanol' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                            <li class="tipo-2"> 
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <!--- NOVE
                        <li class="tipo-2" style="border-top:solid 1px WhiteSmoke;"> 
                            <a href="casa-club.php" style="padding:10px;">
                            VER MAS
                            </a>
                        </li>
                        NOVE --->
                    </ul>
                </li>

                <!--- RESTAURANT --->
                <li class="dropdown tipo-2">
                    <div style="padding:12px 10px 10px 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    RESTAURANTS <span class="caret color-4"></span>
                    </div>
                    <div class="dropdown-menu" style="">
                    <ul class="dropdown-menu sombra">
                        <?php 
                        $catsec = $rowcatt['dieciocho'];
                        $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='restaurants' AND trece ='espanol' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                            <li class="tipo-2"> 
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <!--- NOVE
                        <li class="tipo-2" style="border-top:solid 1px WhiteSmoke;"> 
                            <a href="casa-club.php" style="padding:10px;">
                            VER MAS
                            </a>
                        </li>
                        NOVE --->
                    </ul>
                </li>

                <!--- SOCILAES --->
                <li class="dropdown tipo-2">
                    <div style="padding:12px 10px 10px 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    SOCIALES <span class="caret color-4"></span>
                    </div>
                    <div class="dropdown-menu">
                    <ul class="dropdown-menu sombra">
                        <?php 
                        $catsec = $rowcatt['dieciocho'];
                        $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE dos ='activo' AND cuatro ='sociales' AND trece ='espanol' order by id");
                        while ($row = mysqli_fetch_assoc($re)) { ?>
                            <li class="tipo-2"> 
                                <a href="<?php echo $row['seis']; ?>" style="padding:10px;">
                                    <?php echo $row['uno']; ?>
                                </a>
                            </li>
                        <?php } ?>
                        <!--- NOVE
                        <li class="tipo-2" style="border-top:solid 1px WhiteSmoke;"> 
                            <a href="casa-club.php" style="padding:10px;">
                            VER MAS
                            </a>
                        </li>
                        NOVE --->
                    </ul>
                </li>


                <!------- Seccion Derecha ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM secciones WHERE cuatro ='menu_derecho' AND cinco='editable' AND dos ='activo' AND trece ='espanol'  order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <li class="tipo-2"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></li>
                <?php } ?>

                <!------- Categoria Derecha ------>
                <?php $re = mysqli_query($conexion, "SELECT * FROM categorias WHERE cuatro ='menu_derecho' AND dos ='activo' AND trece ='espanol'  order by id");
                while ($row = mysqli_fetch_assoc($re)) { ?>
                <li class="tipo-2"><a href="<?php echo $row['seis']; ?>"><?php echo $row['uno']; ?></a></li>
                <?php } ?>

                <li class="tipo-2"><a href="contacto.php" target="">CONTACTO</a></li>

            <!--- USUARIO
                <?php if ($_SESSION['loggedin']) { ?>
                   
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           USUARIO: <span style="text-transform:uppercase;"><?php echo $_SESSION['username']; ?></span> <span class="caret color-4"></span>
                        </a>
                        <ul class="dropdown-menu text-right">

                                <li class=""> 
                                    <a href="registro-salir.php" style="padding:10px;">
                                    CERRAR SESIÓN
                                    </a>
                                </li>

                        </ul>
                    </li>

                    <?php } else { ?>
                    <li class=""><a href="registro.php" target="">EMPRESAS</a></li>
                <?php } ?>
            USUARIO --->
                
            <!--- IDIOMA --->
            <li class="dropdown tipo-2">
                <div style="padding:12px 10px 10px 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                IDIOMA <span class="caret color-4"></span>

                </div>
                <div class="dropdown-menu" style="">
                <ul class="dropdown-menu sombra">
                    <li class="tipo-2"> 
                        <a href="ingles.php" style="padding:10px;">
                         ENGLISH
                        </a>
                    </li>
                    <li class="tipo-2"> 
                        <a href="https://clubleoncampestre-com.translate.goog/index.php?_x_tr_sl=es&_x_tr_tl=ja&_x_tr_hl=es&_x_tr_pto=wapp" style="padding:10px;" target="_blanck">
                         日本
                        </a>
                    </li>
                </ul>
            </li>
                
            </ul>
            <!--------------------- Derecho ---------------------->

        </div>
        </div>
</div>
</nav>
<!--- MENU --->

