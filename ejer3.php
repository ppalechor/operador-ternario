<?php
$largo = intval(readline("escriba el largo del terreno\n"));
$ancho = intval(readline("escriba el ancho  del terreno\n"));
$area = $largo * $ancho ;
echo ($area >=1000) ? "terreno adecuado para cultivo extensivos" : "terreno adecuado para huerto o jardin" ;

?>