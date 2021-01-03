<?php
$atributos_actualizar='';

foreach ($_GET as $atributo=>$valor)
{
	if ($atributo=='llave')
	{          
		$llave=$valor;			        
		$llave_valor=$_GET[$llave];     
	}
	
		
	if ($atributo=='tabla')     
		$tabla=$valor;
	
	if ($atributo!='tabla' && $atributo!='llave' && $atributo!='opcion_menu')
	{
		if ($atributos_actualizar!='')
			$atributos_actualizar=$atributos_actualizar.","; 
		
		$atributos_actualizar=$atributos_actualizar.$atributo."='".$valor."'";
	}
	
$consulta_sql="UPDATE $tabla SET ".$atributos_actualizar." WHERE ".$llave."='".$llave_valor."'";
echo '<br>';

include "misDatos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);
mysqli_query($enlace, $consulta_sql);

$consulta_sql="SELECT * FROM $tabla";
$resultado=mysqli_query($enlace, $consulta_sql);
include "desplegarTabla.php";

mysqli_close($enlace);
}		
?>