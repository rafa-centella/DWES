<?php
$packs = 10;
$price = 2.99;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="bucle do-while">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
        do {
            echo $packs;
            echo ' packs cost $';
            echo $price * $packs;
            echo '<br>';
            $packs--;
        } while ($packs > 0)
        ?>
    </p>
</body>
</html>