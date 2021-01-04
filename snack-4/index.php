<?php

/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta
*/

$random_numbers = [];

for ($i = 0; $i < 15; $i++){
    $new_number = rand(1, 100);
    if(in_array($new_number, $random_numbers)){
        $i--;
    } else {
        array_push($random_numbers, $new_number);
    }
};

echo "<h1>Random Numbers</h1>";
echo "<ul>";

foreach ($random_numbers as $value){
    echo "<li>" . $value . "</li>";
}

echo "</ul>";

?>