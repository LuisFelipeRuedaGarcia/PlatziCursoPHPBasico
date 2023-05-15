<?php
$michis = [
    ["Name"=>"MichiJosé",
    "Rol"=> "Amazing Developer",
     "Color" => "striped orange",
    "Foods" => [
        "favourites" => ["Lasanna", "Tuna"],
        "Notfavourites" => ["Pickle", "Orange"]
        ]
    ],
    ["Name"=>"MichiSancio",
    "Rol"=> "JQery Developer",
     "Color" => "White and Black",
    "Foods" => [
        "favourites" => ["everything", "And EveryOne"],
        "Notfavourite" => ["DoesNotExist"]
        ]
    ],
    ["Name"=>"MichiJosé",
    "Rol"=> "PHP Pro",
     "Color" => "white",
    "Foods" => [
        "favourites" => ["pizza", "fish"],
        "Notfavourites" => ["CatsFood"]
        ]
    ],
];
$michisancio = $michis[1];
$mrMichi = $michis[2];

echo "Las Comidas favoritas de Michisancio son " . implode(",",$michisancio["Foods"]["favourites"]);

echo "\n";
echo "El color de Mr.Michi es {$mrMichi["Color"]}"


?>