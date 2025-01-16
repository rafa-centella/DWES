<?php 

$products = ['Pantalla', 'Raton', 'Teclado', 'Altavoces'];

include 'Includes/Header.php';
?>
<h1>Products</h1>
<h2>Haz clic en algún producto:</h2>
<p><ul><?php foreach($products as $product) { ?>
    <li><a href="./Products.php?product=<?= strtolower($product) ?>"><?= $product ?></a></li>
<?php } ?></ul></p>
<?php include_once 'Includes/Footer.php'; ?>