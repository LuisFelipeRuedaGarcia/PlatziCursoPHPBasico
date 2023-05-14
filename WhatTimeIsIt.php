<?php
$inputSegundos = readline("ingresa el tiempo en segundos ");
$horas = (int)($inputSegundos / (60*60));
$segundos = $inputSegundos % (60*60);
$minutos = (int)($segundos / 60);
$segundos %= 60;

echo "son $horas horas, $minutos minutos, y  $segundos segundos";
echo "\n";
echo $minutos;
echo "\n";
?>