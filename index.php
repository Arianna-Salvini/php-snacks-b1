<?php

matches = [
    'home_team':'Milano',
    'host_team':'Cantù',
    'home_score':'55',
    'host_score':'60',
]

for ($i=0; $i < counr($matches); $i++) { 
   $match = $matches[$i]

}

for($i = 0; $i < count($matches); $i++){
    $match = $matches[$i];
    echo $match["team"] . " " . "-" . " " . $match["guest"] . " | " . $match["teamScore"] . "-" . $match["guestScore"] . "<br>";
};

?>