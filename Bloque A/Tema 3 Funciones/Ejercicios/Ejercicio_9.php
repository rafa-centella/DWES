<?php
    $stock = [
        'chocolate' => 15,
        'mint' => 5,
        'toffee'=> 10,
        'strawberry' => 0,
    ];

    function get_stock_message($stock) {
        if ($stock >= 10) {
            return 'Good availability';
        }
        if ($stock == 10) {
            return 'Exactly 10 items in stock';
        }
        if ($stock > 0 && $stock < 10) {
            return 'Low stock';
        }
        return 'Out of stock';
    }
?>

<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Multiples sentencias return</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Message</th>    
            </tr>
            <?php foreach ($stock as $key => $value) { ?>
                <tr>
                    <td><center><?= $key ?></center></td>
                    <td><center><?= $value ?></center></td>
                    <td><center><?= get_stock_message($value) ?></center></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>