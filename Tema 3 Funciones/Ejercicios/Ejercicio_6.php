<?php
    $chocolate = 4;
    $mints = 2.75;
    $toffee = 4.99;
    $rates = [
        'uk' => 0.81,
        'eu' => 0.93,
        'jp' => 113.21,
        'aud' => 1.30,
        'cad' => 1.25,
    ];

    function calculate_prices($usd, $exchange_rates) {
        $prices = [
            'pound' => $usd * $exchange_rates['uk'],
            'euro' => $usd * $exchange_rates['eu'],
            'yen' => $usd * $exchange_rates['jp'],
            'aud' => $usd * $exchange_rates['aud'],
            'cad' => $usd * $exchange_rates['cad'],
        ];
        return $prices;
    }

    $monedas = [
        'eu' => '&euro;',
        'uk' => '&pound;',
        'yen' => '&yen;',
        'aud' => 'AUD',
        'cad' => 'CAD',
    ];

    function formatear_price($price, $country) {
        $formater = number_format($price, 2) . " " . $country;
        return $formater;
    }

    $chocolat = calculate_prices($chocolate, $rates);
    $meta = calculate_prices($mints, $rates);
    $tofe = calculate_prices($toffee, $rates);
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Functions with Multiple values">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejercicio 6</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <table>
            <caption>Price of countries:</caption>
            <br>
            <tr>
                <th>Product</th>
                <th>Australia</th>
                <th>Canada</th>
                <th>Europe</th>
                <th>England</th>
                <th>Japan</th>
            </tr>
            <tr>
                <td>Chocolat</td>
                <td><?= formatear_price($chocolat['aud'], $monedas['aud']) ?></td>
                <td><?= formatear_price($chocolat['cad'], $monedas['cad']) ?></td>
                <td><?= formatear_price($chocolat['euro'], $monedas['eu']) ?></td>
                <td><?= formatear_price($chocolat['pound'], $monedas['uk']) ?></td>
                <td><?= formatear_price($chocolat['yen'], $monedas['yen']) ?></td>
            </tr>
            <tr>
                <td>Mints</td>
                <td><?= formatear_price($meta['aud'], $monedas['aud']) ?></td>
                <td><?= formatear_price($meta['cad'], $monedas['cad']) ?></td>
                <td><?= formatear_price($meta['euro'], $monedas['eu']) ?></td>
                <td><?= formatear_price($meta['pound'], $monedas['uk']) ?></td>
                <td><?= formatear_price($meta['yen'], $monedas['yen']) ?></td>
            </tr>
            <tr>
                <td>Toffee</td>
                <td><?= formatear_price($tofe['aud'], $monedas['aud']) ?></td>
                <td><?= formatear_price($tofe['cad'], $monedas['cad']) ?></td>
                <td><?= formatear_price($tofe['euro'], $monedas['eu']) ?></td>
                <td><?= formatear_price($tofe['pound'], $monedas['uk']) ?></td>
                <td><?= formatear_price($tofe['yen'], $monedas['yen']) ?></td>
            </tr>
        </table>
        <footer><span>&copy <?= date('Y'); ?></span></footer>
    </body>
</html>