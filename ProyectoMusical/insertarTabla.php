<?php
$atributos_insertar='';

foreach ($_GET as $atributo=>$valor)
{		
	if ($atributo=='tabla')
		$tabla=$valor;
	
	if ($atributo!='tabla' && $atributo!='opcion_menu')
	{
		if ($atributos_insertar!='')
			$atributos_insertar=$atributos_insertar.",";  // se va formando la lista de atributos a actualizar
		
		$atributos_insertar=$atributos_insertar."'".$valor."'";
	}			
}
$consulta_sql="INSERT INTO $tabla VALUES (".$atributos_insertar.")";
echo '<br>';
	
include "misDatos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);
mysqli_query($enlace, $consulta_sql);

$consulta_sql="SELECT * FROM $tabla";
$resultado=mysqli_query($enlace, $consulta_sql);
include "desplegarTabla.php";

mysqli_close($enlace);
		
?>