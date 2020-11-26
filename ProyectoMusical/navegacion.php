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
		
		case '2'
			$archivo = 'canciones.html';
			$encabezado = 'Canciones';
		break;
			
		case '3'
			$archivo = 'artistas.html';
			$artistas = 'Artistas';
		break;		
	}
?>
