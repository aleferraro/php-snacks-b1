<?php

/*
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>



<div style="background-color: lightgrey; width: 300px; margin: 1rem; padding: 1rem;">
    <h3 style="text-align: center;">Teachers</h3>
    <ul>
        <?php 
            foreach ($db as $x => $value){
        ?>
        <li>
            <?php
                    echo $value[0]['name'] . " " . $value[0]['lastname'];     
                };
            ?>
        </li>
    </ul>
</div>

<div style="background-color: green; width: 300px; margin: 1rem; padding: 1rem;">
    <h3 style="text-align: center;">PM</h3>
    <ul>
        <?php 
            foreach ($db as $x => $value){
        ?>
        <li>
            <?php
                    echo $value[1]['name'] . " " . $value[1]['lastname'];     
                };
            ?>
        </li>
    </ul>
</div>