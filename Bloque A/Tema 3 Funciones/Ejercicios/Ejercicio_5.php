<?php
    $tax_rate = 0.21;
    $discount_rate = 33;

    function calculate_running_total($price, $quantity) {
        global $tax_rate;
        global $discount_rate;
        static $running_total = 0;
        $total = $price * $quantity;
        $tax = $total * $tax_rate;
        $discount = $total * ($discount_rate / 100);
        $running_total = ($running_total + $total + $tax) - $discount;
        return $running_total;
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Global and Static Variables">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejercicio 5</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <table>
            <tr>
                <th>ITEM</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>DISCOUNT</th>
                <th>RUNNIG TOTAL</th>
            </tr>
            <tr>
                <td>Mints:</td>
                <td>$2</td>
                <td>5</td>
                <td><?= $discount_rate ?>%</td>
                <td><?= calculate_running_total(2, 5) ?></td>
            </tr>
            <tr>
                <td>Toffee:</td>
                <td>$3</td>
                <td>5</td>
                <td><?= $discount_rate ?>%</td>
                <td><?= calculate_running_total(3, 5) ?></td>
            </tr>
            <tr>
                <td>Fudge:</td>
                <td>$5</td>
                <td>4</td>
                <td><?= $discount_rate ?>%</td>
                <td><?= calculate_running_total(5, 4) ?></td>
            </tr>
            <tr>
                <td>Bubble Guns:</td>
                <td>$0.5</td>
                <td>8</td>
                <td><?= $discount_rate ?>%</td>
                <td><?= calculate_running_total(0.5, 8) ?></td>
            </tr>
            <tr>
                <td>StrawBerry:</td>
                <td>$3.5</td>
                <td>15</td>
                <td><?= $discount_rate ?>%</td>
                <td><?= calculate_running_total(3.5, 15) ?></td>
            </tr>
        </table>
    </body>
</html>