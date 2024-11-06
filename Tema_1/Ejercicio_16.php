<?php
$stock = 0;

$message = ($stock > 0) ? "In stock" : "More stock coming soon";
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Ejercicio 16 php">
    <title>Ejercicio 16</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <div class="container">
        <h1>The Candy Store</h1>
        <h2>Chocolate</h2>
        <div>
            <p><?= $message ?></p>
        </div>
    </div>
</body>
</html>