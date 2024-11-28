<?php
$item = 'Chocolate';
$stock = 8;
$wanted = 5;
$can_buy = ($wanted <= $stock);
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desscription" content="Operadores de Comparacion">
    <meta name="author" content="Rafael Centella Guijarro">
    <title>Ejercicio 10</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shooping Cart</h2>
    <p>Item: <?= $item ?></p>
    <p>Stock: <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can_Buy: <?= $can_buy ?></p>
</body>
</html>