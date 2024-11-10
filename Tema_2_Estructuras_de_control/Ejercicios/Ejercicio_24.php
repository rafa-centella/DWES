<?php
$products = [
    'Toffee' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.49,
    'Coffe' => 1.40,
    'Guns' => 1.10,
];
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Bucle foreach">
    <title>Ejercicio 24</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php
        foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
        </table>
</body>
</html>