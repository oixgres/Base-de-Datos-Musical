<?php

include "misDatos.php";

$enlace = mysqli_connect($host, $usuario, $password, $bd);

$consulta_sql= "SELECT * FROM $tabla";

$resultado = mysqli_query($enlace, $consulta_sql);

include "desplegarTabla.php";

mysqli_close($enlace);

?>