<?php

/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
    [
        'name' => 'Alessandro',
        'lastname' => 'Ferraro',
        'grades' => []
    ],
    [
        'name' => 'Alessandro',
        'lastname' => 'Ferraro',
        'grades' => []
    ],
    [
        'name' => 'Alessandro',
        'lastname' => 'Ferraro',
        'grades' => []
    ]
];

foreach ($class as $student => $value){
    //var_dump($student);


    array_push($value['grades'], rand(2, 10), rand(2, 10), rand(2, 10));

    $average = round(array_sum($value['grades'])/count($value['grades']));
    
    //var_dump($value);
    //var_dump($average);


    echo 
        "<h3>Student " . ++$student . "</h3>" .
        "<ul>
            <li>Nome: " . $value['name'] . "</li>
            <li>Cognome: " . $value['lastname'] . "</li>
            <li>Media Voti: " . $average . "</li>
        </ul>"
    ;
};


?>