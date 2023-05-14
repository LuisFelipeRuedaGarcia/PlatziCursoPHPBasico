<?php
$horas = readline("cuántas horas ");
$minutos = readline("cuántos minutos ");
$segundos = readline("cuántas segundos ");
$resultado = $horas*3600 + $minutos*60 + $segundos;
echo "en total son $resultado segundos";
?>