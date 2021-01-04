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
		
		case '43':
			$funcion='clasificaPersona';
			$entrada='RFC';
			$salida='Es';
			$archivo = 'formularioFuncion.php';
			$encabezado = 'Clasificacion Persona';
		break;
		
		case '44':
			$funcion='cancionesAnuales';
			$entrada='Año';
			$salida='Resultado';
			$archivo='formularioFuncion.php';
			$encabezado = 'Canciones totales por año';
		break;
		
		//Busqueda
		case '51':
			$procedimiento='buscaCancion';
			$entrada='subcadena';
			$archivo='formularioBusqueda.php';
			$encabezado='Busqueda de canciones';
		break;
		
		case '52':
			$procedimiento='buscaArtista';
			$entrada='subcadena';
			$archivo='formularioBusqueda.php';
			$encabezado='Busqueda de artistas';
		break;
		
		//Listas
		case '61':
			$procedimiento='listaGenero';
			$entrada='subcadena';
			$archivo='formularioBusqueda.php';
			$encabezado='Canciones por genero';
		break;
		
		case '62':
			$procedimiento='listaAlbum';
			$entrada='subcadena';
			$archivo='formularioBusqueda.php';
			$encabezado='Canciones por album';
		break;
		
		//Actualizaciones
		case '71':
			$opcion_menu='formularioInsertable';
			$tabla = 'Cancion';
			$llave = 'idCancion';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Canciones ';
		break;
		
		case '72':
			$opcion_menu='formularioInsertable';
			$tabla = 'Album';
			$llave = 'Nombre';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Albumes ';
		break;
		
		case '73':
			$opcion_menu='formularioInsertable';
			$tabla = 'GeneroMusical';
			$llave = 'Nombre';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Generos ';
		break;
		
		case '74':
			$opcion_menu='formularioInsertable';
			$tabla = 'Musico';
			$llave = 'idMusico';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Musicos ';
		break;
		
		case '75':
			$opcion_menu='formularioInsertable';
			$tabla = 'Compositor';
			$llave = 'idCompositor';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Compositores ';
		break;
		
		case '76':
			$opcion_menu='formularioInsertable';
			$tabla = 'Premio';
			$llave = 'idPremio';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Premios ';
		break;
		
		case '77':
			$opcion_menu='formularioInsertable';
			$tabla = 'Persona';
			$llave = 'RFC';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Personas ';
		break;
		
		case '78':
			$opcion_menu='formularioInsertable';
			$tabla = 'Representante';
			$llave = 'idRepresentante';
			$archivo = 'consultaTablaAgregable.php';
			$encabezado = 'Modificar Representantes ';
		break;
		
		//Casos no numericos
		case 'ConsultaFn':
			$archivo='consulta_funcion.php';
			$encabezado='Resultado de la funcion'.$GET["funcion"];
		break;
		
		case 'Buscar':
			$archivo = 'consultaProcedimiento.php';
			$encabezado = 'Resultado';
		break;
		
		case 'formularioEditable':
			$archivo = 'formularioEditable.php';
			$encabezado = "Editar";
		break;
		
		case 'Actualizar':
			$archivo = 'actualizarTabla.php';
			$encabezado = "Actualizar";
		break;
		
		case 'formularioInsertable':
			$archivo='formularioInsertable.php';
			$encabezado='Editar';
		break;
		
		case 'Insertar':
			$archivo = 'insertarTabla.php';
			$encabezado = "Nuevo renglon";
		break;
	}
?>
