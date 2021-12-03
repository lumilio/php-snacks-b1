<!-- Snack 2
Creiamo due pagine php.
La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di un invitato.

Inseriamo nell’altro file una lista di invitati. 
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.-->

<?php

$list=$_SESSION['name_list'];

echo var_dump($list);

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


    <form>
    <label for="name"> write the badword</label>
    <input type="text" name='name' id='name'>
    <input type="submit" value='correggi'>
    </form>

    <p> <?php if (in_array('name', $list))
        echo 'ok';
        else echo 'ko'
        ?>
    </p>

</body>
</html>