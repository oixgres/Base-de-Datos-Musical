<?php
$procedimiento=$_GET["procedimiento"];

$cadena_valor='';

foreach ($_GET as $control=>$valor)
{
	$cadena_valor=$cadena_valor."'".$valor."'"; 
	
	if($control!='procedimiento' && $control!='opcion_menu')
		$valores_consultar=$valores_consultar.$cadena_valor;
		$cadena_valor=',';
		
	
}
$consulta_sql="CALL ".$procedimiento."(".$valores_consultar.")"; 

echo '<br>';

include "misDatos.php";
$enlace = mysqli_connect($host, $usuario, $password, $bd);

$resultado = mysqli_query($enlace, $consulta_sql);

include "desplegarTabla.php";

mysqli_close($enlace);
?>