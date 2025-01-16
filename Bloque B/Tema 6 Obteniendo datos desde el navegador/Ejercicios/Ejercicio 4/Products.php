<?php

$products = [
    'pantalla' => ['Pantalla oled de 47\' 4K Smart Tv', 159.90, 'Disponible'],
    'raton' => ['Mouse Gaming de Logitech', 34.99, 'Agotado'],
    'teclado' => ['Teclado G-Lab mecanico', 49.99, 'Disponible'],
    'altavoces' => ['Altavoces Red Dragón 6.1 digital', 29.99, 'Agotado'],
];

$product = $_GET['product'] ?? '';
$valid = array_key_exists($product, $products);

if (!$valid) {

    http_response_code(404);
    header('Location: Error-page.php');
    exit;

}

$description = $products[$product][0];
$price = $products[$product][1];
$stock = $products[$product][2];

include 'Includes/Header.php';
?>

<h1><?= $product ?></h1>
<p>Descripción: <?= $description ?></p>
<p>Precio: <?= $price ?></p>
<p>Estado: <?= $stock ?></p>

<a href="./Index.php">Volver al Inicio</a>

<?php include 'Includes/Footer.php'; ?>
