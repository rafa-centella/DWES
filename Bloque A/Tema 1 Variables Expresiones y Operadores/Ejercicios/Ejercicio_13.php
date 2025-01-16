<?php
$username = 'Usuario';

$saludo = 'Bienvenido a nuestra librería ' . $username . ".";

$oferta = [
    'item' => 'Pilot G2',
    'cantidad' => 10,
    'precio' => 1.8,
    'descuento' => 45,
];

$precioSinDescuento = $oferta['cantidad'] * $oferta['precio'];
$descuento = ($precioSinDescuento * $oferta['descuento']) /100;
$precioConDescuento = $precioSinDescuento - $descuento;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejercicio propuesto Tema 1">
    <meta name="author" content="Rafael Centella Guijarro">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    
    <h1>Libreria La esquina</h1>

    <h2>Oferta de Navidad:</h2>
    
    <p><?= $saludo ?></p>

    <p>Si te llevas <?= $oferta['cantidad'] ?> de nuestros <?= $oferta['item'] ?> te aplicamos el <?= $oferta['descuento'] ?>% de descuento.</p>

    <p>Llevate uno por <?= $oferta['precio'] ?>€ o <?= $oferta['cantidad'] ?> por solo <?= $precioConDescuento ?>€</p>

    <p class="sticker">Ahorras <?= $descuento ?>€</p>

</body>
</html>