<?php
$name = 'Rafa';
$name = 'Domingo';
$price = 5;
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desscription" content="Actualizando el valor de una variable">
    <meta name="author" content="Rafael Centella Guijarro">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="Styles/Style.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is $<?php echo $price; ?> per pack.</p>
</body>
</html>