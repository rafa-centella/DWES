<?php
$counter = 1;
$packs = 10;
$price = 1.99;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="bucle while">
    <title>Ejercicio 20</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
        while ($counter < $packs) {
            echo $counter;
            echo ' packs cost $';
            echo $price * $counter;
            echo '<br>';
            $counter++;
        }
        ?>
    </p>
</body>
</html>