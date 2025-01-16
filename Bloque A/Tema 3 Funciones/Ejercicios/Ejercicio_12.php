<?php
declare(strict_types = 1);
$candy = [
    'Toffe' => ['price' => 3.00, 'stock' => 12],
    'Mints' => ['price' => 2.00, 'stock' => 26],
    'Fudge' => ['price' => 4.00, 'stock' => 8],
];
$tax = 21;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax = 0): float {
    return ($price * $quantity) * ($tax / 100);
}

?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejemplo final</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Stock control</h2>
        <table>
            <tr>
                <th>Candy</th>
                <th>Stock</th>
                <th>Re-order</th>
                <th>Total Value</th>
                <th>Tax due</th>
            </tr>
            <?php foreach ($candy as $product_name => $data) { ?>
                <tr>
                    <td><center><?= $product_name ?></center></td>
                    <td><center><?= $data['stock'] ?></center></td>
                    <td><center><?= get_reorder_message($data['stock']) ?></center></td>
                    <td><center><?= get_total_value($data['price'], $data['stock']) ?> $</center></td>
                    <td><center><?= get_tax_due($data['price'], $data['stock'], $tax) ?></center></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>