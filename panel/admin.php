<nav id="sidebar">
 <!--- NOVE ---->   
   <div class="sidebar-header">
      <a href="menu_alta_dise.php"><img src="https://rtasoftware.com.mx/929e89b203fdfc65e57d.png" width="100%"></a>
      <p><br></p>
      <h4 class="tipo">Usuario: <?PHP  echo '<span class="letra">'.$_SESSION['usuario_login'];'</span>'; ?> </h4>
   </div>

   <ul class="list-unstyled components"> 
      
      <li>
         <a href="menu_alta_dise.php"> Home </a>
      </li>

      <li>
         <a href="#informacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <img src="imagenes/f-verde.png" width="14"> Información
           </a>
               <ul class="collapse list-unstyled" id="informacion">
                  <li><a href='informacion.php?cve=1'> Información de contacto </a></li>
                  <li><a href='redes_todas.php'> Redes sociales </a></li>
                  <li><a href='colores.php'> Colores / Estilos </a></li>
                  <!--- NOVE 
                  <li><a href='nosotros_edita.php'> Nosotros </a></li>
                  NOVE ---->
               </ul>
      </li>
                          
      <li>
         <a href="#contenidos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <img src="imagenes/f-amarillo.png" width="14"> Contenidos 
           </a>
               <ul class="collapse list-unstyled" id="contenidos">
                  <li><a href='baners_todos.php'> Banners</a></li>
                  <li><a href='secciones_todos.php'> Secciones</a></li>
                  <li><a href='blog_todos.php'> Noticias Actividades y Eventos </a></li>
                  <!--- NOVE
                  <li><a href='contenidos_todos.php'> Contenidos </a></li>
                   <li><a href='clientes_todos.php'> Clientes</a></li>
                  NOVE ---->
               </ul>
      </li>

      
 <!--- NOVE
      <li>
         <a href="#productos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <img src="imagenes/f-naranja.png" width="14"> Catalogo
         </a>
            <ul class="collapse list-unstyled" id="productos">
               <li><a href='productos_todos.php'> Productos </a></li>    
               <li><a href='categorias_todos.php'> Categorias </a></li>
               <li><a href='marcas_todos.php'> Marcas </a></li> 
               <li><a href='estilos_todos.php'> Estilos </a></li>      
            </ul>
      </li>
               
      <li>
         <a href="#pedidos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <img src="imagenes/f-rojo.png" width="14"> Empresas Registradas
         </a>   
            <ul class="collapse list-unstyled" id="pedidos">  
               <li><a href='usuarios_todos.php'> Usuarios </a></li>
               <li><a href='pedidos.php'> Ver Pedidos </a></li>
               <li><a href='cupones_todos.php'> Cupones </a></li>
               <li><a href='envio_todos.php'> Envio </a></li>
               <li><a href='banco.php?cve=1'> Banco y Paypal </a></li> 
            </ul>
      </li>
NOVE ---->   

      <li class="nav-item">
      <hr>                          
      <a class="nav-link" href="aut_logout.php">Salir</a>
      </li>
                
   </ul>
</nav>  