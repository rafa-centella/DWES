<?php
$items = 100;
$cost = 10;
$subtotal = $cost * $items;
$tax = ($subtotal /100) *20;
$total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="./Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shooping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: <?= $cost ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Tax: <?= $tax ?></p>
    <p>Total: <?= $total ?></p>
</body>
</html>