<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$products = [
    'Ratón' => 20,
    'Teclado' => 30,
    'Monitor' => 200,
    'Silla' => 150,
    'Auriculares' => 50,
    'Micrófono' => 100,
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    if (isset($_SESSION['cart'][$product_name])) {
        $_SESSION['cart'][$product_name] += 1;
    } else {
        $_SESSION['cart'][$product_name] = 1;
    }
}

include 'Includes/Header.php';
?>
    <section>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Añadir al carrito</th>
            </thead>
            <tbody>
                <?php foreach ($products as $key => $value) { ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?> €</td>
                        <td>
                            <form action="Products.php" method="POST">
                                <input type="hidden" name="product_name" value="<?= $key ?>">
                                <input type="hidden" name="product_price" value="<?= $value ?>">
                                <button type="submit" id="enviar">Añadir al carrito</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <form action="Cart.php" method="POST">
                            <button type="submit" id="enviar">Ver carrito</button>
                        </form>
                    </td>
                </tr>
            </tfoot>
        </table>
    </section>
<?php include 'Includes/Footer.php'; ?>