<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 

Stampiamo il nostro array mettendo 
gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->

<?php

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pm, .teachers{ width: 300px}
        .teachers{ background-color: green; }
        .pm{ background-color: grey; }
    </style>
</head>
<body>
    <?php 
        for ($i=0; $i < count($db['teachers']) ; $i++) { 
            echo "<div class='teachers' >
                <p>{$db['teachers'][$i]['name']}</p>
                <p>{$db['teachers'][$i]['lastname']}</p>
            </div>"  ;
        }
        for ($i=0; $i < count($db['pm']) ; $i++) { 
            echo "<div class='pm' >
                <p>{$db['pm'][$i]['name']}</p>
                <p>{$db['pm'][$i]['lastname']}</p>
            </div>"  ;
        }
    ?>
</body>
</html>