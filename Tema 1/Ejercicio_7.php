<?php
$name = 'Rafa';
$favorites = ['Strawberry', 'Chocolate', 'Toffee', 'Fudge',];
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is: <?= $favorites[0] ?>.</p>
</body>
</html>