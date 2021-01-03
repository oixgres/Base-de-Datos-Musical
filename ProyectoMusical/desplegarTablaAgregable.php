<?php
echo '<table border=0>';
echo '<tr><th align="left"><a href="index.php?opcion_menu=formularioInsertable&tabla='.$tabla.'"><h1><strong>+</h1></a></th></tr>';
echo '</table>';
echo '<table border=1>'; 

$encabezados=0;
while($renglon= mysqli_fetch_array($resultado))
{
	mysqli_field_seek($resultado, 0);
	
	if ($encabezados==0)
	{
		
		echo '<tr>';
		while ($atributo= mysqli_fetch_field($resultado))
		{
			echo '<th>';  
			echo $atributo->name;
			echo '</th>'; 
		}
		$encabezados=1;
		mysqli_field_seek($resultado, 0);
		echo '</tr>';
	}
	
	echo '<tr>';
	while ($atributo= mysqli_fetch_field($resultado)){
		echo '<td>';
		if ($atributo->name==$llave)
		    echo '<a href="index.php?opcion_menu=formularioEditable&tabla='.$tabla.'&llave='.$llave.'&valor='.$renglon[$atributo->name].'">'.$renglon[$atributo->name].'</a>';
		else	
			echo $renglon[$atributo->name];  
		
		echo '</td>'; 
	}
	echo '</tr>';  
}
echo '</table>';
?>