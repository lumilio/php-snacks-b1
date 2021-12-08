<!-- Snack 2
Creiamo due pagine php.
La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di un invitato.

Inseriamo nell’altro file una lista di invitati. 
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.-->

<?php

$name = $_GET['name'];

$name_list = [
    'giorgio',
    'samuele',
    'tiziano',
    'francesco',
];


if(in_array($name, $name_list)) {
    echo 'Welcome you are!';
  } else {
    echo 'Entry forbidden, dark side you are!';
  }


?>


