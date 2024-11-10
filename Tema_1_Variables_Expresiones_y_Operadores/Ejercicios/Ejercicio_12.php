<?php
$username = 'Rafa';

$greeting = 'Hi, ' . $username . ".";

$offer = [
    'item' => 'Chocolate',
    'qty' => 3,
    'price' => 6,
    'discount' => 4,
];

$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejercicio final del tema 1">
    <meta name="author" content="Rafael Centella Guijarro">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>

    <h2>Multi-buy Offer</h2>

    <p><?= $greeting ?></p>

    <p class="sticker">Save $<?= $saving ?></p>

    <p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?> for $<?= $offer_price ?><br>(usual_price $<?= $usual_price ?>)</p>
</body>
</html>