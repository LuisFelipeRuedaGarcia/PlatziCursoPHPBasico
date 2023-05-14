<?php

$michi_felinos = true;
$michi_4_patas = true;
$michi_vuelan = false;
$michis_programan_con_PHP = false; //son más de Python 

//AND

var_dump($michi_felinos && $michi_4_patas);
//OR
var_dump($michi_felinos || $michi_vuelan);
echo "\n";
//NOT
var_dump(!$michi_4_patas);

$resultado = $michi_4_patas && $michis_programan_con_PHP;

var_dump($resultado);