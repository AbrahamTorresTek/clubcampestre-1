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
                  <h4 class="tipo color"> OCULTAR MENU LATERAL</h4>
                </div>

                <div class=" col-xs-12 ">
                  <hr>
                </div>

                <div class=" col-xs-12 col-sm-3 text-left">
                  <a href="secciones_todos.php">
                      <button class="btn btn-block btn-warning"> Regresar </button>
                  </a>
                </div>

                <div class=" col-xs-12 col-sm-4 text-left">
                  <h4 class="tipo color"> Alta nuevo secciones </h4>
                </div>


                <div class=" col-xs-12 ">
                  <br>
                </div>

            </div>  
            <!-- BOTON CERRAR -->


            <!----- FORM ---->
                  <div class=" col-xs-12 col-sm-12 text-left">
                  <form action="secciones_valida.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                              <div class=" col-xs-12 col-sm-12 text-left">
                              <div class="fondo-gris">
                                    <h3 class="tipo color-negro">Pagina de Inicio</h3> 
                              </div>
                              </div>

                              <div class=" col-xs-12 col-sm-4 text-left">
                                    <h4 class=" tipo">Nombre Corto <small>Visible en menu</small></h4> 
                                    <input type="text" name="uno" required class="form-control" >
                              </div>
                              <div class=" col-xs-2 col-sm-2 text-left">
                                    <h4 class=" tipo">Posicion en Menu </h4> 
                                    <select name="cuatro" id="cuatro" required class="form-control">
                                          <option value="casa-club" class="form-control"> Casa club </option>
                                          <option value="golf" class="form-control"> Golf </option>
                                          <option value="restaurants" class="form-control"> Restaurantes </option>
                                          <option value="sociales" class="form-control"> Social </option>
                                          <option value="menu_derecho" class="form-control"> Menu Derecho</option>
                                          <option value="menu_izquierdo" class="form-control"> Menu Izquierdo</option>
                                    </select>
                              </div>
                                          
                              <input type="hidden" name="dos" value="activo" class="form-control" >
                              <input type="hidden" name="cinco" value="editable" class="form-control" >
                              <!--- NOVE
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Activo / Inactivo</h4> 
                                    <select name="dos" id="dos" required class="form-control">
                                          <option value="activo" selected="selected">Activo</option>
                                          <option value="inactivo" class="form-control">inactivo</option>
                                    </select>
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo"> Tipo </h4>
                                    <input type="text" readonly hiden name="cinco" class="form-control" value="editable" >
                              </div>
                              NOVE --->


                              <div class=" col-xs-12 col-sm-4 text-left">
                              <h4 class=" tipo">Seo </h4> 
                                    <input type="text" name="dieciocho" class="form-control" >
                                    <small>minusculas sin caracteres extraños - medio en lugar de espacio</small>
                              </div>

                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Idioma </h4> 
                                    <select name="trece" id="trece" required class="form-control">
                                          <option value="espanol" selected="selected">Español</option>
                                          <option value="ingles" class="form-control">Ingles</option>
                                    </select>
                              </div>

                              <input type="hidden" name="doce" value="normal" class="form-control" >
                              <input type="hidden" name="nueve" value="4" class="form-control" >
                              <input type="hidden" name="diez" value="500" class="form-control"  >
                              <!--- NOVE
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Arriva / Abajo </h4> 
                                    <select name="doce" id="doce" required class="form-control">
                                          <option value="<?php echo $row['doce'];?>" selected="selected"><?php echo $row['doce'];?></option>
                                          <option value="arriba" class="form-control">Arriba</option>
                                          <option value="abajo" class="form-control">Abajo</option>
                                    </select>
                              </div>
                              <div class="col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Ancho </h4> 
                                    <input type="text" name="nueve" required class="form-control" >
                                    <small> col-sm-offset </small>
                                    </select>
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Alto px</h4> 
                                    <input type="text" name="diez" value="500px" required class="form-control"  >
                              </div>
                              NOVE --->



                              <div class=" col-xs-12"><p></p></div>

                        <div class=" col-xs-12 col-sm-12 text-left">            
                        <div class="fondo-gris">
                              <h3 class="tipo color-negro">Seccion Interna</h3> 
                        </div>
                        </div>

                              <div class=" col-xs-12 col-sm-6 text-left">
                              <h4 class=" tipo">Titulo Interior</h4> 
                              <input type="text" name="siete" required class="form-control" value="<?php echo $row['siete'];?>" >
                              </div>
                              <div class=" col-xs-12 col-sm-4 text-left">
                                    <h4 class=" tipo">Subtitulo</h4> 
                                    <input type="text" name="ocho" class="form-control" value="<?php echo $row['ocho'];?>" >
                              </div>
                              <div class=" col-xs-12 col-sm-2 text-left">
                                    <h4 class=" tipo">Alto px</h4> 
                                    <input type="text" name="once" required class="form-control" value="500" >
                              </div>

                        <div class=" col-xs-12"><p></p></div>                        

                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Descripcion</h4>                         
                                    <textarea type="text" name="descripcion" class="form-control" rows="10"></textarea>
                              </div>

                               <!--- NOVE
                              <div class=" col-xs-12 text-left">
                                    <h4 class=" tipo">Complementos</h4>                         
                                    <textarea type="text" name="diecisiete" class="form-control" rows="5"></textarea>
                                    <small class="tipo">* Esta area cubre toda la pagina y acepta codigo</small>
                              </div>
                              NOVE --->

                              <div class=" col-xs-12"><p></p></div>   

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen Portada <small class="tipo">* Solo si es visible en Index</small></h4> 
                                    <input type="file" name="imagen" class="form-control" >
                                    <small class="tipo">* Recomendable 300px x alto agregado</small>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Imagen top seccion</h4> 
                                    <input type="file" name="imagen2" class="form-control" >
                                    <small class="tipo">* Recomendable 1500px x 300px</small>
                              </div>

                              <div class=" col-xs-4 text-left">
                                    <h4 class=" tipo">Primera imagen</h4> 
                                    <input type="file" name="imagen3" class="form-control" >
                                    <small class="tipo">* Recomendable 500px x 500px</small>
                              </div>

                       <div class=" col-xs-12"><p></p></div>   

                        <div class=" col-xs-3 text-left">
                              <p><br/></p>
                              <button type="submit" class="btn btn-warning btn-block" value="Enviar"> Guardar secciones</button>
                              <p><br/></p>
                        </div> 

                  </div>             
                  </form>        
            <!----- FORM ---->

      </div>  
      <!-- CONTENIDO -->
</div>

<!-- FOOTER -->
<?php include("footer.php") ?>
<!-- FOOTER -->

</body>
</html>