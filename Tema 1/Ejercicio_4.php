<?php
$best_sellers = ['Chocolate','Mints','Fudge','Coffe','Bubble gum','Toffee','Jelly beans',];
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        <li><?php echo $best_sellers[3]; ?></li>
        <li><?php echo $best_sellers[4]; ?></li>
    </ul>
</body>
</html>