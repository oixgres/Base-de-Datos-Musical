<?php
echo '<table border = 1>';

while($renglon= mysqli_fetch_array($resultado))
{ 
	mysqli_field_seek($resultado, 0);
	
	if ($encabezados==0)
	{
		echo '<tr>';
		while ($atributo= mysqli_fetch_field($resultado))
		{
			echo '<th>';  // Se inicia una nueva celda en el renglón
			echo $atributo->name;  // El arreglo renglón contiene un valor para cada nombre de atributo
			echo '</th>'; // Termina la celda
		}
		$encabezados=1;
		mysqli_field_seek($resultado, 0);
		echo '</tr>';
	}
	
	echo '<tr>';
	while ($atributo= mysqli_fetch_field($resultado))
	{
		echo '<td>';  // Se inicia una nueva celda en el renglón
		echo $renglon[$atributo->name];  // El arreglo renglón contiene un valor para cada nombre de atributo
		echo '</td>'; // Termina la celda
	}
	echo '</tr>';
}
echo '</table>';

?>