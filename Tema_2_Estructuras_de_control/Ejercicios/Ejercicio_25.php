<?php
$best_sellers = ['Toffee', 'Mints', 'Fudge','Coffee', 'StrawBerry',];
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Bucle foreach (II)">
    <title>Ejercicio 25</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <p>
        <?php
        foreach ($best_sellers as $candy) { ?>
            <p><?= $product ?></p>
        <?php } ?>
    </p>
</body>
</html>