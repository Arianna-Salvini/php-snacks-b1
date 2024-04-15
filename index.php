<?php

$matches = [
    [
        'home_team':'Milano',
        'guest_team':'Cantù',
        'home_score':'55',
        'guest_score':'60',
    ];

    [
        'home_team':'Verona',
        'guest_team':'Bologna',
        'home_score':'53',
        'guest_score':'66',
    ];

    [
        'home_team':'Bolzano',
        'guest_team':'Trento',
        'home_score':'23',
        'guest_score':'67',
    ];
        
]

for($i = 0; $i < count($matches); $i++){
    $match = $matches[$i];
    echo $match["home_team"] . " " . "vs" . " " . $match["guest_team"] . " | " . $match["home_score"] . "-" . $match["guest_score"] . "<br>";
};

?>