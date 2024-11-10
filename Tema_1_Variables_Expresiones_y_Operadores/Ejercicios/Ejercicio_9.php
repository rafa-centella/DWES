<?php
$prefix = 'Thank you';
$name = 'Rafa';
$message = "$prefix $name";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desscription" content="Operadores de cadenas strings">
    <meta name="author" content="Rafael Centella Guijarro">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>
</body>
</html>