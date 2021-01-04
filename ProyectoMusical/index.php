<?php
	include "navegacion.php";
?>
<!DOCTYPE html>
<!--
Template Name: Fluffster
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Base de Datos Musical</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/design.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">


<div class="wrapper row0">
  <div id="mainav" class="hoc clear"> 
   <ul class="clear">
	
		<li class="active"><a href="index.php">1] Bienvenida</a></li>
	
		<li> <a class = "drop" href = "#">2] Musica</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=21">1] Canciones </a></li>
				<li> <a href = "index.php?opcion_menu=22">2] Albumes </a></li>
				<li> <a href = "index.php?opcion_menu=23">3] Generos </a></li>
			</ul>
		</li>
		
		<li> <a class = "drop" href = "#">3] Artistas</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=31">1] Musicos </a></li>
				<li> <a href = "index.php?opcion_menu=32">2] Compositores </a></li>
				<li> <a href = "index.php?opcion_menu=33">3] Premios </a></li>
			</ul>
		</li>
		
		<li> <a class = "drop" href = "#">4] Otros</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=41">1] Personas</a></li>
				<li> <a href = "index.php?opcion_menu=42">2] Representantes</a></li>
			</ul>
		</li>
		
		<li> <a class = "drop" href = "#">5]Busqueda</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=51">1] Canciones</a></li>
				<li> <a href = "index.php?opcion_menu=52">2] Artistas</a></li>
			</ul>
		</li>
		
		<li> <a class = "drop" href = "#">6]Listas</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=61">1] Canciones por genero</a></li>
				<li> <a href = "index.php?opcion_menu=62">2] Canciones por album </a></li>
			</ul>
		</li>
		
		<li> <a class = "drop" href = "#">7] Actualizaciones</a>
			<ul>
				<li> <a href = "index.php?opcion_menu=71">1] Canciones </a></li>
				<li> <a href = "index.php?opcion_menu=72">2] Albumes</a></li>
				<li> <a href = "index.php?opcion_menu=73">3] Generos</a></li>
				<li> <a href = "index.php?opcion_menu=74">4] Musicos</a></li>
				<li> <a href = "index.php?opcion_menu=75">5] Compositores</a></li>
				<li> <a href = "index.php?opcion_menu=76">6] Premios</a></li>
				<li> <a href = "index.php?opcion_menu=77">7] Persona</a></li>
				<li> <a href = "index.php?opcion_menu=78">8] Representante</a></li>
			</ul>
		</li>
	<!---
      <li><a class="drop" href="#">2] Consultas</a>
        <ul>
          <li><a href="index.php?opcion_menu=21">1] Tabla Artista</a></li>
		  <li><a href="index.php?opcion_menu=22">2] Tabla Producto</a></li>
	      <li><a href="index.php?opcion_menu=23">3] Vista Facturas</a></li>
		  <li><a href="index.php?opcion_menu=24">4] Vista Productos Vendidos</a></li>
		  <li><a href="index.php?opcion_menu=25">5] Función Ventas Totales Fecha</a></li>
		  <li><a href="index.php?opcion_menu=26">6] Función Ventas Totales Periodo</a></li>
		  <li><a href="index.php?opcion_menu=27">7] Función Ventas Totales Cliente-Periodo</a></li>
          <li><a href="index.php?opcion_menu=28">8] Procedimiento Busca Cliente</a></li>
        </ul>
      </li>
	
	  
	  <li><a class="drop" href="#">3] Actualizaciones</a>
        <ul>
          <li><a href="index.php?opcion_menu=31">1] Productos</a></li>
		  <li><a href="index.php?opcion_menu=32">2] Clientes</a></li>
		  <li><a href="index.php?opcion_menu=33">3] ABC Productos</a></li>	
		  <li><a href="index.php?opcion_menu=34">4] ABC Clientes</a></li>	
		</ul> 
	   </li>
	   -->
    </ul>
   
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <section>
      <div></div>
      <div>
       <h3 class="heading">Bases de Datos<br>PROYECTO MUSICAL<br><a href="index.php">Sony Music</a></h3>
      </div>
       
	   <div><img src="images/LogoBaseMusical3.png"></div>
    </section>
  </header>
</div>

<div class="wrapper row2">
  <div id=" " class="hoc clear"> 
    <img src="images/barra.png"></div>
  </div>
</div>


<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="sectiontitle">
      <h3 class="heading"><?php echo $encabezado;?></h3>
	  
      <p><?php include $archivo;?></p>
	  
	 
    </div>
    
    
  </main>
</div>


<div class="wrapper row5">

  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2020 - Todos los derechos reservados - <a href="#">http://omd-prof.xyz/</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>