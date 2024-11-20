<?php include("conectarse.php"); $re = mysqli_query($conexion,"SELECT * FROM colores");
while($row=mysqli_fetch_assoc($re)) { ?>

/* MENU*/
.navbar-default {
  background-color: <?php echo $row['menufondo'];?>;
  border-color: <?php echo $row['menufondo'];?> ;
} 

.fondo-logo {
  background-color: <?php echo $row['fondocolor1'];?>;
  border-color: <?php echo $row['fondocolor1'];?> ;
} 
footer {
	background-image: url(../imagenes/footer-fondo.png);
	background-repeat: no-repeat;
	background-position: bottom center;
	background-color: <?php echo $row['fondocolor1'];?>;
	position: relative;
	color: <?php echo $row['fondocolortexto1'];?> ;
	}


/* Letras Menu */
.navbar-default .navbar-nav > li > a {
	color: <?php echo $row['menutexto'];?>;
	background-color:  <?php echo $row['menufondo'];?>;
	border-width: 0px 0px 3px 0px;
	border-style: solid;
	border-color: <?php echo $row['menufondo'];?>;
}
/* Menu Rallitas icono */
.navbar-default .navbar-toggle .icon-bar {
  background-color: <?php echo $row['menutexto'];?> ;
}
/* Menu Over */
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
color: <?php echo $row['menuhover'];?>;
background-color:  <?php echo $row['menufondo'];?> ;
  border-width:0px 0px 3px 0px;
	border-style: solid;
	border-color: <?php echo $row['menuhover'];?>;
}
/* Link */
a {
color: <?php echo $row['link'];?> ;
text-decoration: none;
}
a:hover,
a:focus {
	color:<?php echo $row['linkhover'];?>;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
/* MENU Abierto */
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: -15%;
  z-index: 1000;
  display: none;
  float: rigth;
  min-width: 200px;
  padding: 0px;
  text-align:center;
  list-style: none;
  background-color: #ffffff;
  border-radius: 0px;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
          
  }
.dropdown-menu > li > a {
  display: block;
  padding: px 10px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: <?php echo $row['menutexto'];?>;
  white-space: nowrap;
  }
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: <?php echo $row['menuborder'];?>;
  text-decoration: none;
  background-color:  <?php echo $row['menuhover'];?>;
  }
.hover-color-3:hover {
  background-color:  <?php echo $row['menuhover'];?>;
  color:<?php echo $row['fondocolortexto3'];?>;
  transition: transform .3s ease-in-out;
  }


/* Secciones*/
body {
	background-color: <?php echo $row['fondogeneral'];?>;
	color:<?php echo $row['fondogeneraltexto'];?>;	
  font-size: 13px;
}
.linea-top{
	padding: 10px;
	}	

.copy{
	padding-top: 10px;
	padding-bottom: 3px;
	}
.fondo-nau{
	background-color:#000;
	padding:10px;
	color:#FFF;
	}	



/* Colores Textos*/
.color-1{
	color: <?php echo $row['color1'];?>;
	}
.color-2{
	color: <?php echo $row['color2'];?>;
	} 
.color-3{
	color: <?php echo $row['color3'];?>;
	} 
.color-4{
	color: <?php echo $row['color4'];?>;
	}   
.color-blanco{
	color: #FFF;
	}	
.color-negro{
	color: #000;
	}    
.color-gris{
	color: #888888;
	}    	



/* Colores Fondos*/
.fondo-1{
	background-color: <?php echo $row['fondocolor1'];?>;
	color: <?php echo $row['fondocolortexto1'];?>;
	}			
.fondo-2{
	background-color: <?php echo $row['fondocolor2'];?>;
	color: <?php echo $row['fondocolortexto2'];?>;
	}
.fondo-3{
	background-color: <?php echo $row['fondocolor3'];?>;
	color: <?php echo $row['fondocolortexto3'];?>;
	}  
  .fondo-4{
	background-color: <?php echo $row['fondocolor4'];?>;
	color: <?php echo $row['fondocolortexto4'];?>;
	}    
.fondo-blanco{
	background-color: #FFF ;
	color: #666666 ;
	} 
.fondo-negro{
	background-color: #000000 ;
	color: #e4e4e4 ;
	} 	   			
.textura{
	background-image:url(imagenes/textura.png);
	background-repeat:repeat;
	}	
.fondo-top{
	background-image:url(imagenes/imagen-principal-top.png);
    background-position: center top;
    background-repeat: no-repeat;
    background-size-NOVE: 60%;
	height: 700px;
	}
.fondo-line{
	background-image:url(imagenes/fondo-line.png);
    background-position: center center;
    background-repeat: repeat-x;
	}	
.fondo-back{
	background-image:url(imagenes/imagen-principal-back.png);
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size-NOVE: 60%;
	height: 700px;
	}
	
.fondo-imagen{
	background-image:url(imagenes/fondo-imagen.png);
	background-attachment: fixed ;
    background-position: center center;
    background-repeat: repeat;
    background-size: 100%;
	background-color: <?php echo $row['fondocolor1'];?>;
    width: 100%;
	}
.fondo-mail{
	background-image:url(imagenes/fondo-mail.png);
    background-position: center top;
    background-repeat:repeat;
	}	


        



/* Contornos*/
.contorno{
	border-width: 1px;
	border-style: solid;
	border-color: transparent ;
	}	
.contorno-color-1{
	border-width: 1px;
	border-style: solid;
	border-color: <?php echo $row['color1'];?>;;
	}			
.contorno-color-2{
	border-width: 1px;
	border-style: solid;
	border-color: <?php echo $row['color2'];?>;;
	}	
.contorno-color-3{
	border-width: 1px;
	border-style: solid;
	border-color: <?php echo $row['color3'];?>;
	}	
  .contorno-color-4{
	border-width: 1px;
	border-style: solid;
	border-color: <?php echo $row['color4'];?>;
	}	

    
/* TEXTOS*/
.mayusculas {
	text-transform: uppercase;
	} 
.minusculas {
	text-transform: capitalize;
	} 	  
.texto-grande{
    font-size:50px;
	}	
   
    






/* Tools */
/* Sube suave el scroll */
html{
	scroll-behavior: smooth;
} 

.zoom {
	transition: transform 1s;
}
.zoom:hover {
    transform: scale(1.05);
}
.whats-flotante{
	position: fixed;
	z-index: 200;
	right: 0px;
	bottom: 0px;
	padding: 15px;   
}
/* sigue */
.sigue {
	position: sticky;
	top: 0;
	z-index: 100;
	}


	

/* Sombras */
.link-sombra:hover {
	box-shadow: 0px 5px 20px #00000040;
	border-width: 1px;
	border-style: solid;
	border-color: <?php echo $row['color3'];?>;
	transition: transform .9s;
}
.sombra {
	box-shadow: 0px 5px 5px#0000007c;
	}	
.sombra-texto {
	text-shadow:0px 3px 8px#0000007c;
	}


    
						


/* NEW ARRIBA IMAGEN */
.contenedor__item {
	position: relative;
	margin: auto;
	width: 100%;
}	
.contenedor__item:before {
	content: "";
	width: 100%;
	height: 100%;
	position: absolute;
	background: linear-gradient( rgba(255, 255, 255, 0) 50% ,rgba(0, 0, 0, 0));
}		
.contenedor__texto {
	position: absolute;
	top: 10px;
	left: 10px;
    padding: 5px;
}


.grises img {
	filter: url('#grayscale'); /* Versión SVG para IE10, Chrome 17, FF3.5, Safari 5.2 and Opera 11.6 */
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);
	filter: grayscale(100%); /* Para cuando es estándar funcione en todos */
	filter: Gray(); /* IE4-8 and 9 */
	opacity:.3;
	
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	}
	.grises img:hover {
	-webkit-filter: grayscale(0%);
	-moz-filter: grayscale(0%);
	-ms-filter: grayscale(0%);
	-o-filter: grayscale(0%);
	filter: none;
	opacity:1;
	
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	}







/* GALERIA */ 
*{ 
        box-sizing: border-box;
        margin: 0;
        padding: 0;
     }
    .galeria{ 
        display: grid ;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        width: 100%;
        margin: auto;
        grid-gap: 0px;
        padding: 0;
        overflow: hidden;
    } 
    /*
    .galeria < a{ 
        display: block;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 6px rgba(0, 0, 0, .8);
    } 
    */
    .imagen-tops{
	object-fit: cover;
	width: 100%;
	height: 300px;
	background-position: center center;
  }
    .galeria-zoom{ 
        width: 100%;
        vertical-align: top;
        object-fit: contain;
    } 
    
    .light-box{ 
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .8);
        transition: transform .3s ease-in-out;
        width: 100%;
        height: 100vh;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: scale(0);
    } 
    .light-box img{ 
        width: 90vw;
        max-height: 95vh;
    }   
    .light-box:target{ 
        transform: scale(1);
    }  
    .closee{ 
        display: block;
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #000000;
        padding: 0px 20px 5px 20px;
        color: #ffffff;
        text-decoration: none;
        transition: transform .3s ease-in-out;
        z-index:1000;
    }  
    .flechas{ 
        display: block;
        background-color: #000000;
        padding: 0px 20px 5px 20px;
        color: cornsilk;
        transition: transform .3s ease-in-out;
        text-align: center;
    }       
/* GALERIA */ 

/* BOTON */ 
.btn-btn1 {
  color: <?php echo $row['color4'];?>;
  background-color: <?php echo $row['fondocolortexto4'];?>;
  border: 1px solid <?php echo $row['color4'];?>;
}
.btn-btn1:focus{
  color: <?php echo $row['fondocolortexto4'];?>;
  background-color: <?php echo $row['color4'];?>;
  border: 1px solid <?php echo $row['color4'];?>;
}
.btn-btn1:hover {
  color: <?php echo $row['fondocolortexto4'];?>;
  background-color: <?php echo $row['color4'];?>;
  border: 1px solid <?php echo $row['color4'];?>;
}
.btn-btn1:active,
.btn-btn1.active,
.open > .dropdown-toggle.btn-btn1 {
  color: <?php echo $row['color4'];?>;
  background-color: <?php echo $row['fondocolor4'];?>;
  border-color:<?php echo $row['fondocolortexto4'];?>;
}
.btn-btn1:active:hover,
.btn-btn1.active:hover,
.open > .dropdown-toggle.btn-btn1:hover,
.btn-btn1:active:focus,
.btn-btn1.active:focus,
.open > .dropdown-toggle.btn-btn1:focus,
.btn-btn1:active.focus,
.btn-btn1.active.focus,
.open > .dropdown-toggle.btn-btn1.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-btn1:active,
.btn-btn1.active,
.open > .dropdown-toggle.btn-btn1 {
  background-image: none;
}
.btn-btn1.disabled:hover,
.btn-btn1[disabled]:hover,
fieldset[disabled] .btn-btn1:hover,
.btn-btn1.disabled:focus,
.btn-btn1[disabled]:focus,
fieldset[disabled] .btn-btn1:focus,
.btn-btn1.disabled.focus,
.btn-btn1[disabled].focus,
fieldset[disabled] .btn-btn1.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-btn1 .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 1;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid ;
  border-radius: 0px;
}

.video-container {
  position:relative;
  z-index: 1;
  top:0;
  left:0;
  width: 100%;
  height:400px ; 
  overflow: hidden;   
}



/* BANNER ANIMACION */ 
.carousel-indicators {
  position: absolute;
  bottom: 0px;
  left: 0px;
  z-index: 100;
  width: 100%;
  padding-left: 0;
  margin-left: 0px;
  text-align: center;
  list-style: none;
}
.carousel-indicators {
  display: inline-block;
  width: 100%;
  height: 2px;
  margin: 0px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  border: 1px solid rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  width: 100%;
  height: 2px;
  margin: 0;
  background-color: <?php echo $row['color3'];?>;
  border: 1px solid rgba(0, 0, 0, 0);
  animation-duration: 5s;
  animation-name: linea;
  animation-timing-function: ease-in-out;
}

@keyframes linea {
  0% {
   width: 0px;
   background-color:<?php echo $row['color3'];?>;
  }
  }

.baner-izq{
	position: absolute;
	left: 0px;
	top:40%;
	z-index:200;
}
.baner-der{
	position: absolute;
	right: 0px;
	top:40%;
	z-index:200;
}
.contenedor{
	position: relative;
	right: 0px;
	z-index:0;
	height: 500px
}	  
<? } ?>
