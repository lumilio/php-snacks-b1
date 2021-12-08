<!-- 
Stampare una stringa verde se la variabile password passata in GET è uguale a "Boolean",
altrimenti stampare una stringa rossa.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green{
            background-color: green;
            width: max-content;
        }
        .red{
            background-color: red;
            width: max-content;
        }
    </style>
</head>
<body>

    <form>
        <label for="password"> write the password</label>
        <input type="text" name='password' id='password'>
        <input type="submit" value='entra'>
    </form>

    <?php


        if (isset($_GET["password"]))
        echo '<p ' . ($_GET["password"] == 'Boolean' ? "class='green'" : "class='red'") . '>' . 'stringa comanda colore' . '</p>';


        if ($_GET["password"] == 'Boolean')
        echo "<p>Accesso consentito !</p>";
        else 
        echo 'Accesso negato';

        
    ?>
    
</body>
</html>