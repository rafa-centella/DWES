<?php
include 'Includes/Product.php';

$product1 = new Product(001, 'Funda Iphone');
$product2 = new Product(002, 'Cristal Templado', 5.99, 25);
$product3 = new Product(003, 'Altavoz Bluethoot', 15.99, 5);
$product2->price = 4.99;

?>

<?php require 'Includes/Header.php'; ?>
<h2>Products</h2>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $product1->id ?></td>
            <td><?= $product1->name ?></td>
            <td><?= $product1->price ?></td>
            <td><?= $product1->stock ?></td>
        </tr>
        <tr>
            <td><?= $product2->id ?></td>
            <td><?= $product2->name ?></td>
            <td><?= $product2->price ?></td>
            <td><?= $product2->stock ?></td>
        </tr>
        <tr>
            <td><?= $product3->id ?></td>
            <td><?= $product3->name ?></td>
            <td><?= $product3->price ?></td>
            <td><?= $product3->stock ?></td>
        </tr>
    </tbody>
</table>
<?php include 'Includes/Footer.php'; ?>
