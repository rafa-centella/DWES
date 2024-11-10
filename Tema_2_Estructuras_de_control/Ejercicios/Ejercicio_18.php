<?php
$day = 'Wednesday';

switch ($day) {
    case 'Monday':
        $offer = '20% off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    case 'Wednesday':
        $offer = '25% off guns strawberry';
        break;
    default:
        $offer = 'Buy three packs, get one free';
}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Sentencia switch">
    <title>Ejercicio 18</title>
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