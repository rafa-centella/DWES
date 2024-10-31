<?php
$item = 'Chocolate';
$stock = 3;
$wanted = 5;
$deliver = true;
$can_buy = (($wanted <= $stock) and ($deliver == true));
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="./Styles/Style.css">
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