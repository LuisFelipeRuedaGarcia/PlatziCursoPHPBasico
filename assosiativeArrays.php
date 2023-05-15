<?php
$edades =   array(

"carlos" => 20,
"Mr.Michi" => 18,
"Juan" => 40,
);
echo "La edad del Gato es " . $edades["Mr.Michi"];
echo "\n";

$cafes = [
    "capucchino" => 50,
    "Latte"=>49,
    "Americano"=>70,
];
echo "El cafe cuesta {$cafes['Americano']}";
echo "\n";

$personas = [
    "Carlos"=> ["edad" => 20, "Apellido" => "Santana"],
    "Mr.Michi"=> ["edad" => 18, "Apellido" => "N/A"],
];

echo " La edad de Mr.Michi es " . $personas["Mr.Michi"]["edad"]." y su apellido ".$personas["Mr.Michi"]["Apellido"];
echo "\n";