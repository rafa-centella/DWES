<?php
    function calculate_total($price, $quantity) {
        $cost = $price * $quantity;
        $tax = $cost * (20 / 100);
        $total = $cost + $tax;
        return $total;
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Modificando parámetros">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <p>Mints: $<?= calculate_total(2, 5) ?></p>
        <p>Toffee: $<?= calculate_total(3, 5) ?></p>
        <p>Fudge: $<?= calculate_total(5, 4) ?></p>
        <p>Guns: $<?= calculate_total(1.50, 4) ?></p>
    </body>
</html>