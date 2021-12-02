
<!-- Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data.


Stampare ogni data con i relativi post -->



<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Giorhio ',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele ',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Giovanni ',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Alessandro ',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Pasquale ',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Salvatore ',
            'text' => 'Testo post 6'
        ]
    ],
];

$date = array_keys($posts);

/* echo var_dump($posts) .'<br>' .'<br>';
echo var_dump($date) .'<br>' .'<br>';

echo var_dump($date[0]) .'<br>' .'<br>';

echo var_dump($posts[$date[0]]) .'<br>' .'<br>';
echo var_dump($posts[$date[1]]) .'<br>' .'<br>';
echo var_dump($posts[$date[2]]) .'<br>' .'<br>'; */




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .data{margin-top: 80px}
    </style>
</head>
<body>

    <?php 



        for ($i=0; $i < count($posts) ; $i++) { 

            echo "<p class='data' >{$date[$i]}</p>";

            for ($i2=0; $i2 < count($posts[$date[$i]]) ; $i2++) { 
                echo "<p>{$posts[$date[$i]][$i2]['title']}</p>";
                echo "<p>{$posts[$date[$i]][$i2]['author']}</p>";
                echo "<p>{$posts[$date[$i]][$i2]['text']}</p>";
            }
        }
    ?>

</body>
</html>