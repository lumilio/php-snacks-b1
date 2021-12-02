
<!-- Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$number_list = [];

while(count($number_list) < 15){
    $random = rand(1, 100);
    if (!in_array($random, $number_list)) {
        array_push($number_list, $random);
    }
}

echo var_dump($number_list);

?>







