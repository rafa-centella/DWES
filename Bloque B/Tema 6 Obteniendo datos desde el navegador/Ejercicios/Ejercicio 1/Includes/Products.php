<?php

$products = [
    'pantalla' => 'Pantalla oled de 47\' 4K Smart Tv',
    'raton' => 'Mouse Gaming de Logitech',
    'teclado' => 'Teclado G-Lab mecanico',
    'altavoces' => 'Altavoces Red Dragón 6.1 digital',
];

$product = $_GET('product');
$description = $products[$product];

include 'Header.php';
?>

<h1><?= $product ?></h1>
<p>Descripción: <?= $description ?></p>

<a href="../Index.php">Volver al Inicio</a>

<?php include 'Footer.php'; ?>
