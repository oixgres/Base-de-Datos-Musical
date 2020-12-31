<?php

	if(!isset($_GET["opcion_menu"]))
		$opcion_elegida = "1";
	else
		$opcion_elegida = $_GET["opcion_menu"];

	switch($opcion_elegida)
	{
		case '1': 
			$archivo = 'inicio.html';
			$encabezado = 'Inicio';
		break;
		
		//Musica
		case '21':
			$tabla='Cancion';
			$archivo = 'tabla.php';
			$encabezado = 'Canciones ';
		break;
		
		case '22':
			$tabla='Album';
			$archivo = 'tabla.php';
			$encabezado = 'Albumes';
		break;
		
		case '23':
			$tabla='GeneroMusical';
			$archivo = 'tabla.php';
			$encabezado = 'Generos Musicales';
		break;
		
		//Artistas
		case '31':
			$tabla='Musico';
			$archivo = 'tabla.php';
			$encabezado = 'Musicos';
		break;
		
		case '32':
			$tabla='Compositor';
			$archivo = 'tabla.php';
			$encabezado = 'Compositores';
		break;
		
		case '33':
			$tabla='Premios';
			$archivo = 'tabla.php';
			$encabezado = 'Premios';
		break;
		
		//Otros
		case '41':
			$tabla='Persona';
			$archivo = 'tabla.php';
			$encabezado = 'Personas';
		break;
		
		case '42':
			$tabla='Representante';
			$archivo = 'tabla.php';
			$encabezado = 'Representantes';
		break;
		
		//Actualizaciones
		case '51':
			$opcion_menu='formulario_editable';
			$tabla = 'Cancion';
			$llave = 'idCancion';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Canciones '.$tabla;
		break;
		
		case '52':
			$opcion_menu='formulario_editable';
			$tabla = 'Album';
			$llave = 'Nombre';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Albumes '.$tabla;
		break;
		
		case '53':
			$opcion_menu='formulario_editable';
			$tabla = 'GeneroMusical';
			$llave = 'Nombre';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Generos '.$tabla;
		break;
		
		case '54':
			$opcion_menu='formulario_editable';
			$tabla = 'Musico';
			$llave = 'idMusico';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Musicos '.$tabla;
		break;
		
		case '55':
			$opcion_menu='formulario_editable';
			$tabla = 'Compositor';
			$llave = 'idCompositor';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Compositores '.$tabla;
		break;
		
		case '56':
			$opcion_menu='formulario_editable';
			$tabla = 'Premio';
			$llave = 'idPremio';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Premios '.$tabla;
		break;
		
		case '57':
			$opcion_menu='formulario_editable';
			$tabla = 'Persona';
			$llave = 'RFC';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Personas '.$tabla;
		break;
		
		case '58':
			$opcion_menu='formulario_editable';
			$tabla = 'Representante';
			$llave = 'idRepresentante';
			$archivo = 'consulta_tabla_musica.php';
			$encabezado = 'Modificar Representantes '.$tabla;
		break;
	}
?>
