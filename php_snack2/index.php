<?php

// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”



$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];


if (strlen($name) > 3 && str_contains($email, '@') && str_contains($email, ".") && is_numeric($age)) {
    echo "Accesso eseguito";
} else {
    echo "accesso negato";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="get">

        <input type="mail" name="name">
        <input type="text" name="email">
        <input type="text" name="age">
        <button type="submit">Play</button>





    </form>

</body>

</html>