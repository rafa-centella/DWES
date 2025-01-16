<?php
    $price = '1';
    $quantity = 3;

    function calculate_total(int|float $price, int $quantity): int|float {
        return $price * $quantity;
    }

    
    $total = calculate_total($price, $quantity);
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Type Declarations">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejercicio 7</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <p>Total $<?= $total ?></p>
    </body>
</html>