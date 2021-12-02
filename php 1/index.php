








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

    <label for="mail"> write the badword</label>
    <input type="text" name='mail' id='mail'>

    <label for="age"> write the badword</label>
    <input type="text" name='age' id='age'>

    <input type="submit" value='correggi'>
    </form>

    <p> <?php if ( 
        (is_numeric($_GET['age']) && strpos($_GET["mail"], '.') && strpos($_GET["mail"], '@'))) ?> </p>
    

</body>
</html>

