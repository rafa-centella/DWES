<?php
$stock = 25;

if ($stock >= 10) {
    $message = 'Good availability';
} elseif ($stock > 0 and $stock < 10) {
    $message = 'Low stock';
} elseif ($stock == 0) {
    $message = 'Out of stock';
}
?>

<?php require_once 'Includes/Header.php'; ?>

<h2>Chocolate</h2>
<p><?= $message ?>

<?php include 'Includes/Footer.php'; ?>