<?php
$name = '';
$greeting = 'Hello';

if($name !== '') {
    $greeting = "Welcome back $name";
}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Centella Guijarro">
    <meta name="description" content="Condicional if">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <div class="container">
        <h1>The Candy Store</h1>
        <h2><?= $greeting ?></h2>
    </div>
</body>
</html>