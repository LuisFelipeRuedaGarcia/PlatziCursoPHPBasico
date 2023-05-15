<?php
$edades = [18, 22, 40, 34];
echo count($edades);
echo "\n";
array_push($edades, 13);
/* var_dump($edades); */
$thisIsnotAnArray="Xd";
var_dump(is_array($edades));
var_dump(is_array($thisIsnotAnArray));

$listaDeFrutas = "fresa,cereza,manzana";
var_dump(explode(",",$listaDeFrutas));
var_dump(implode(",",$edades));
echo "\n";
?>