<?php

$p = explode(',',$entrada);

echo '<form action = "index.php">';
echo '<table>';

$i = 0;

while ($p[$i])
{
	echo '<tr>';
	echo '<td align="right">'.$p[$i].':</td>';
	echo '<td><input tyoe="text" name="'.$p[$i].'"></td>';
	echo '</tr>';
	$i = $i + 1;
}

echo '<input type="hidden" name="procedimiento" value='.$procedimiento.'>';	
echo '</form>';
echo '</table>';
echo '<p align="center"><input type="submit" name="opcion_menu" value="Buscar"></p>';

?>