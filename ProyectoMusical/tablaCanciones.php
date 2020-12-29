<?php

include "misDatos.php";

$enlace = mysqli_connect($host, $usuario, $password, $bd);

$consulta_sql= "SELECT * FROM $tabla";

$resultado = mysqli_query($enlace, $consulta_sql);

include "desplegarTablaCanciones.php";

mysqli_close($enlace);

?>