<?php
$day = 'Tuesday';
$day = 'Wednesday';

$offer = match ($day) {
    'Monday' => '20% off chocolates',
    'Tuesday' => '25% off guns lime',
    'Saturday', 'Sunday' => '20% off mints',
    //default => '10% off your entire order',
};
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Ejercicio 19 php">
    <title>Ejercicio 19</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <div class="container">
        <h1>The Candy Store</h1>
        <h2>Offers on <?= $day ?></h2>
        <div>
            <p><?= $offer ?></p>
        </div>
    </div>
</body>
</html>