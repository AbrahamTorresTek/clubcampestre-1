<?php include("cabezera.php"); ?>

<body>

  <div class="wrapper">
    <!-- LATERAL -->
    <?php include("admin.php"); ?>
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
          <a href="productos.php">
            <button class="btn btn-block btn-warning"> Agregar Productos </button>
          </a>
        </div>

        <div class=" col-xs-12 col-sm-4 text-left">
          <spam class="tipo color">
            <?php $re = mysqli_query($conexion, "SELECT * FROM productos  ");
            $total = mysqli_num_rows($re);
            echo "<h4> Total de productos: $total </h4>";
            ?>

          </spam>
        </div>


        <div class=" col-xs-12 ">
          <br>
        </div>

      </div>
      <!-- BOTON CERRAR -->


      <!----- CONTENIDO ---->
      <div class="row">
        <div class=" col-xs-12 col-sm-12 text-left">

          <!--- BUSCADOR ---->
          <?phpinclude 'config.php'; ?>
          <form action="productos_todos.php" method="get">
            <div class="row">
              <div class=" col-xs-12 col-sm-3 text-left">
                <h4 class="tipo">Buscar Nombre</h4>
              </div>
              <div class=" col-xs-12 col-sm-3 text-left">
                <input type="text" name="palabra" class="form-control" value="<?phpecho ($_GET["palabra"]);  ?>" />
                <p></p>
              </div>
              <div class=" col-xs-12 col-sm-3 text-left">
                <input type="submit" name="buscador" class="btn btn-block btn-default" value="Buscar" />
                <p></p>
              </div>
            </div>
          </form>



          <div class="row">


            <?phpif ($_GET['buscador']) {
              $buscar = $_GET['palabra'];
              if (empty($buscar)) {
                echo "No se ha ingresado ninguna palabra";
              } else {
                $sql = "SELECT * FROM productos WHERE uno LIKE '%$buscar%' AND tipo='principal'";
                $result = mysqli_query($conexion, $sql);
                $total = mysqli_num_rows($result);
                if ($row = mysqli_fetch_array($result)) {
                  echo "<h4>Total de resultados: $total </h4>";
                  do { ?>

                    <!--- RESULTADOS ---->
                    <table width="100%" class=" table table-striped">
                      <tr>
                        <td>
                          <div class="row">

                            <div class=" col-xs-12 col-sm-6 text-left">
                              <p id="<?php echo $row['id']; ?>"></p>
                              <h3 class="color1 tipo"><?php echo $row['uno']; ?></h3>
                              <table width="100%" class="">
                                <td align="left" width="25%" background-color="white">
                                  <spam class="tipo"> Estado:</spam> </br>
                                  <spam class=" colornegro  tipo"><?php echo $row['dos']; ?> </spam>
                                  <p></p>
                                  <spam class=" tipo"> Novedad: </spam> </br>
                                  <spam class=" colornegro  tipo"> <?php echo $row['siete']; ?> </spam>
                                  <p></p>
                                </td>
                                <td align="left" width="50%">
                                  <spam class=" tipo"> Categoria </spam> </br>
                                  <spam class="colornegro  tipo"> <?php echo $row['seis']; ?> </spam>
                                  <p></p>
                                  <spam class=" tipo"> Marca </spam> </br>
                                  <spam class=" colornegro  tipo"> <?php echo $row['cinco']; ?> </spam>
                                  <p></p>
                                </td>
                                <td align="left" width="25%">
                                  <spam class="tipo"> Precio: </spam>
                                  </spam> </br>
                                  <spam class=" colornegro tipo"> <?php echo $row['doce']; ?> </spam>
                                  <p></p>
                                  <spam class="tipo"> Inventario: </spam> </br>
                                  <spam class=" colornegro tipo"> <?php echo $row['trece']; ?>
                                    <p></p>
                                </td>
                              </table>
                            </div>

                            <div class=" col-xs-12 col-sm-4 text-left">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">

                        <td width="25%" align="center" valign="top">
                          <img src="../catalogo/<?php echo $row['f1']; ?>" style="object-fit:contain; height:200px; width:100%;" class="">
                          <p></p>
                          <a href="productos_edita_foto_1.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar</button></a>
                          <p></p>
                        </td>

                        <td width="25%" align="center" valign="top" style="">
                          <?php if ($row['f2'] == 'null' or $row['f2'] == '' or $row['f2'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f2']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_2.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar</button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_2.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                        <td width="25%" align="left" valign="top">
                          <?php if ($row['f3'] == 'null' or $row['f3'] == '' or $row['f3'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f3']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_3.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar </button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_3.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                        <td width="25%" align="left" valign="top">
                          <?php if ($row['f4'] == 'null' or $row['f4'] == '' or $row['f4'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f4']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_4.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar </button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_4.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                      </table>
                    </div>

                            <div class=" col-xs-12 col-sm-2 text-left">
                            <p></p>
                      <a href="productos_edita.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
                      </a>
                      <p></p>

                      <a href="imgx_index.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Mas Imagenes</button>
                      </a>
                      <p></p>
<!--- NOVE  
                      <a href="tamanos_edita.php?cve=<?php echo $row['tres']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Tamaños </button>
                      </a>
                      <p></p>
NOVE --->
                      <a href="productos_edita_pdf.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> PDF General </button>
                      </a>
                      <p></p>


                      <a href="productos_edita_pdf_dos.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> PDF Empresas</button>
                      </a>
                      <p></p>


                      <div class="dropdown">
                        <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Eliminar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a href="productos_elimina.php?cve=<?php echo $row['id']; ?>">
                            <button class="btn btn-danger btn-block"> Si Eliminar </button>
                          </a>
                        </div>
                      </div>
                      <p><br></p>
                          </div>
                        </td>
                      </tr>
                    </table>
                    <!--- RESULTADOS ---->

            <?php } while ($row = mysqli_fetch_array($result));
                } else {
                  echo "No se encontraron resultados para: $buscar";
                }
              }
            } ?>

          </div>
          <!--- BUSCADOR ---->












          <!---CATALOGO ---->
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class=" table table-striped">
            <?php $re = mysqli_query($conexion, "SELECT * FROM productos WHERE tipo='principal' ORDER BY id DESC ");
            while ($row = mysqli_fetch_assoc($re)) { ?>
              <tr>
                <td>

                  <div class="row">

                    <div class=" col-xs-12 col-sm-6 text-left">
                      <p id="<?php echo $row['id']; ?>"></p>
                      <h3 class="colornegro tipo"><?php echo $row['uno']; ?></h3>
                      <table width="100%" class="">
                        <td align="left" width="20%">
                          <spam class="tipo"> Estado:</spam> </br>
                          <spam class=" colornegro  tipo"><?php echo $row['dos']; ?> </spam>
                          <p></p>
                          <spam class=" tipo"> Novedad: </spam> </br>
                          <spam class=" colornegro  tipo"> <?php echo $row['siete']; ?> </spam>
                          <p></p>
                        </td>
                        <td align="left" width="40%">
                          <spam class=" tipo"> Categoria </spam> </br>
                          <spam class="colornegro  tipo"> <?php echo $row['seis']; ?> </spam>
                          <p></p>
                          <spam class=" tipo"> Marca </spam> </br>
                          <spam class=" colornegro  tipo"> <?php echo $row['cinco']; ?> </spam>
                          <p></p>
                        </td>
                        <td align="left" width="20%">
                          <spam class="tipo"> Precio: </spam>
                          </spam> </br>
                          <spam class=" colornegro tipo"> <?php echo $row['doce']; ?> </spam>
                          <p></p>
                          <spam class="tipo"> Inventario: </spam> </br>
                          <spam class=" colornegro tipo"> <?php echo $row['trece']; ?>
                            <p></p>
                        </td>
                        <td align="left" valign="top" width="20%">
                          <spam class="tipo"> Tamaños: </spam> </br>
                          <spam class="colornegro tipo"> <?php echo $row['diez']; ?> </spam><br>
                          <?php
                          $medi = $row['tres'];
                          $remed = mysqli_query($conexion, "SELECT * FROM productos WHERE tres='$medi' AND tipo='secundario'");
                          while ($rowmed = mysqli_fetch_assoc($remed)) {
                          ?>
                            <spam class="colornegro tipo"> <?php echo $rowmed['diez']; ?> </spam><br>
                          <?php } ?>

                          <p></p>
                        </td>
                      </table>
                    </div>

                    <div class=" col-xs-12 col-sm-4 text-left">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">

                        <td width="25%" align="center" valign="top">
                          <img src="../catalogo/<?php echo $row['f1']; ?>" style="object-fit:contain; height:200px; width:100%;" class="">
                          <p></p>
                          <a href="productos_edita_foto_1.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar</button></a>
                          <p></p>
                        </td>

                        <td width="25%" align="center" valign="top" style="">
                          <?php if ($row['f2'] == 'null' or $row['f2'] == '' or $row['f2'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f2']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_2.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar</button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_2.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                        <td width="25%" align="left" valign="top">
                          <?php if ($row['f3'] == 'null' or $row['f3'] == '' or $row['f3'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f3']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_3.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar </button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_3.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                        <td width="25%" align="left" valign="top">
                          <?php if ($row['f4'] == 'null' or $row['f4'] == '' or $row['f4'] == NULL) { ?>
                            <p style="height:200px;"></p>
                          <?php } else { ?>
                            <img src="../catalogo/<?php echo $row['f4']; ?>" style="object-fit:contain; height:200px; width:100%;">
                            <p></p>
                          <?php } ?>
                          <a href="productos_edita_foto_4.php?cve=<?php echo $row['id']; ?>"><button class="btn btn-xs btn-default btn-block"> Modificar </button></a>
                          <p></p>
                          <div class="dropdown">
                            <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Eliminar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a href="productos_elimina_foto_4.php?cve=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger btn-block"> Si Eliminar </button>
                              </a>
                            </div>
                        </td>

                      </table>
                    </div>

                    <div class=" col-xs-12 col-sm-2 text-left">
                      <p></p>
                      <a href="productos_edita.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Modificar Info</button>
                      </a>
                      <p></p>

                      <a href="imgx_index.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Mas Imagenes</button>
                      </a>
                      <p></p>
<!--- NOVE  
                      <a href="tamanos_edita.php?cve=<?php echo $row['tres']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> Tamaños </button>
                      </a>
                      <p></p>
NOVE --->
                      <a href="productos_edita_pdf.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> PDF General </button>
                      </a>
                      <p></p>


                      <a href="productos_edita_pdf_dos.php?cve=<?php echo $row['id']; ?>">
                        <button class="btn btn-xs btn-default btn-block"> PDF Empresas</button>
                      </a>
                      <p></p>

                      <div class="dropdown">
                        <button class="btn btn-xs btn-default btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Eliminar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a href="productos_elimina.php?cve=<?php echo $row['id']; ?>">
                            <button class="btn btn-danger btn-block"> Si Eliminar </button>
                          </a>
                        </div>
                      </div>
                      <p><br></p>
                    </div>

                  </div>

                </td>
              </tr>
            <?php } ?>
          </table>
          <!---CATALOGO ---->




          <!----- CONTENIDO ---->




        </div>
      </div>
      <!-- CONTENIDO -->

      <?php include("footer.php") ?>

</body>

</html>