<?php       //Ejercicio Final del Tema 2
$name = 'Ivy';
$greeting = 'Hello.';
$product = 'Lollipop';
$cost = 10;

if ($name) {
    $greeting = 'Welcome back,' . $name;
}

for ($i = 1; $i <= 20; $i++) {
    $subtotal = $cost * $i;
    $discount = ($subtotal / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}

?>

<?= require 'Includes/Header.php' ?>
<p><?= $greeting ?></p>
<h2><?= $product ?> Discounts</h2>
<table>
    <tr>
        <th>Packs</th>
        <th>Price</th>
    </tr>
    <?php foreach ($totals as $quantity => $price) { ?>
    <tr>
        <td><?= $quantity ?> pack<?= ($quantity === 1) ? '' : 's'; ?>.</td>
        <td>$<?= $price ?></td>
    </tr>
    <?php } ?>
</table>
<?php include 'Includes/Footer.php' ?>