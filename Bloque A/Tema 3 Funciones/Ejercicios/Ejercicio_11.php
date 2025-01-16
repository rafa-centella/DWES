<?php

    $products = [
        'Dark Chocolate' => [5, 10, 5, 1.21, 21, 0], // lista: cost, quantity, discount, tax, % de tax, shipping
        'Milk Chocolate' => [3, 4, 0, 1.16, 16, 1.99],
        'White Chocolate' => [2.8, 15, 20, 1, 0, 2.99],
        'Chocolate with almonds' => [5.5, 12, 10, 1.25, 25, 0],
        'chocolate with puffed rice' => [3.5, 20, 30, 1.26, 26, 0.99],
    ];

    function calculate_cost($cost, $quantity, $discount = 5, $tax = 21, $shipping = 0) {
        $cost = $cost * $quantity;
        $discount = $cost * ($discount / 100);
        $tax = $cost * ($tax / 100);
        return number_format(($cost + $tax) - $discount, 2);
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Argumentos con nombre</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <p>Dark chocolate $<?= calculate_cost(5, 10, 5) ?></p>
        <p>Milk chocolate $<?= calculate_cost(3, 4) ?></p>
        <p>White chocolate $<?= calculate_cost(4, 15, 20) ?></p>
        <p>Chocolate with almonds $<?= calculate_cost(5.5, 12, 10) ?></p>
        <p>Chocolate with puffed rice $<?= calculate_cost(3.5, 20, 30) ?></p>
        <br>
        <hr>
        <table>
            <tr>
                <th>Product</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Shipping</th>
                <th>Total</th>
            </tr>
            <?php foreach ( $products as $index => $value) { ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><center><?= $value[0] ?> $</center></td>
                    <td><center><?= $value[1] ?></center></td>
                    <td><center><?= $value[2] ?> $</center></td>
                    <td><center><?= $value[4] ?>%</center></td>
                    <td><center><?= $value[5]?> $</center></td>
                    <td><center><?= calculate_cost($value[0], $value[1], $value[2], $value[3], $value[5]) ?> $</center></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>