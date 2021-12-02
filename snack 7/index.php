

<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
    [
        'nome' => 'Mario',
        'cognome' => 'Giordano',
        'voti' => [5,7,3,5,7,8],
    ],
    [
        'nome' => 'Mirtilla',
        'cognome' => 'Malcontenta',
        'voti' => [4,5,4,6,7,7],
    ],
    [
        'nome' => 'Giovanni',
        'cognome' => 'Ronca',
        'voti' => [4,5,2,5,1,2],
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Pedretti',
        'voti' => [9,8,7,8,9,9],
    ],
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
    </style>
</head>
<body>

    <?php 
        for ($i=0; $i < count($alunni) ; $i++) { 
            $media = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
            echo "<p>{$alunni[$i]['nome']} {$alunni[$i]['cognome']} {$media}</p>" ; 
        }
    ?>

</body>
</html>