<?php 
    declare(strict_types= 1);
    $books = [
        'The maid\'s daughters' => ['price' => 21.75, 'stock' => 5],
        'The angel of the city'=> ['price'=> 20.80, 'stock'=> 7],
        'Hello!'=> ['price'=> 2.99, 'stock'=> 25],
        'Vogue' => ['price'=> 3.99, 'stock'=> 10],
    ];
    $tax_rate = 12;

    function get_total_stock(array $book):int {
        return $book['stock'];
    }

    function get_inventory_value(float $price, int $stock): string {
        return number_format($price * $stock, 2);
    }

    function calculate_tax($price, int $tax): string {
        return number_format($price * ($tax / 100), 2);
    }
?>

<?php require 'Includes/Header.php' ?>

    <table>
        <tr>
            <th>Título</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Valor en inventario</th>
            <th>Impuesto a pagar</th>
        </tr>
        <?php foreach ($books as $title => $book) { ?>
            <tr>
                <td><?= $title ?></td>
                <td><?= $book['price'] ?> $</td>
                <td><?= get_total_stock($book) ?></td>
                <td><?= get_inventory_value($book['price'], $book['stock']) ?> $</td>
                <td><?= calculate_tax(get_inventory_value($book['price'], $book['stock']), $tax_rate) ?> $</td>
            </tr>
        <?php } ?>
    </table>

<?php include_once 'Includes/Footer.php' ?>