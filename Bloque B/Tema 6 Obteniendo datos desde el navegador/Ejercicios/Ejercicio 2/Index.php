<?php 

$cities = [
    'London' => '48 Store Street, WCIE 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC' => '1242 7th Street, 10492',
    'Tokyo' => '6 Chome-10-1 Roppongi, Minato, Tokyo 106-0032',
];

$city = $_GET['city'] ?? '';

if ($city) {
    $address = $cities[$city];
} else {
    $address = 'Please select a city';
}

include 'Includes/Header.php';
?>

<p><?php foreach($cities as $citi => $value) { ?>
    <a href="./Index.php?city=<?= $citi ?>"><?= $citi ?></a>
<?php } ?></p>
<h1><?= $city ?></h1>
<p><?= $address ?></p>

<?php include_once 'Includes/Footer.php'; ?>