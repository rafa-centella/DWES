<?php
session_start();
$products = [
    'Ratón' => 20,
    'Teclado' => 30,
    'Monitor' => 200,
    'Silla' => 150,
    'Auriculares' => 50,
    'Micrófono' => 100,
];

if (!isset($_SESSION['cart'])) {
    header('Location: Products.php');
    exit;
} else {
    include 'Includes/Header.php';
    ?>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                        <td><?= $value * $products[$key] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <form action="Checkout.php" method="POST">
                            <button type="submit" id="enviar">Terminar la compra</button>
                        </form>
                    </td>
                </tr>
            </tfoot>
        </table>
    </section>
    <?php
}
include 'Includes/Footer.php';
?>