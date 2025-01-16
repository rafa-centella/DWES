<?php       //Ejercicio propuesto del tema 2
$name = 'Rafa';
$greeting= 'Hello';
$month = 25;
$subtotal = 0;

if ($name === '') {
    $greeting = "Welcome back, $user";
}

for ($i = 1; $i <= 12; $i++) {
    $subtotal = $month * $i;
    $discount = ($subtotal / 100) * ($i * 3);
    $totals[$i] = $subtotal - $discount;
}
//echo "<link rel=stylesheet href=Styles/Style_club.css>";
?>


<div id="saludo">
    <h2><?= $greeting ?></h2>
</div>
<div id="tabla">
    <table>
        <caption><h3><u>Monthly discount table</u></h3></caption>
        <tr>
            <td>Month</td>
            <td>Price</td>
        </tr>
        <?php foreach ($totals as $index => $price) { ?>
        <tr>
            <td><?= $index ?> mes<?= ($index === 1) ? '' : 'es'; ?></td>
            <td><?= $price ?>€</td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php include_once 'Includes/Footer_club.php' ?>