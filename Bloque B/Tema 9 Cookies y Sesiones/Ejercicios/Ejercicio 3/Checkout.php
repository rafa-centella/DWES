<?php
session_start();

if (!isset($_SESSION['cart'])) {
    header('Location: Products.php');
    exit;
} else {
    session_destroy();
    include 'Includes/Header.php';
    ?>
    <section>
        <h1>Gracias por su compra</h1>
        <form action="Products.php" method="get">
            <button type="submit" id="enviar">Volver a la tienda</button>
        </form>
    </section>
    <?php include 'Includes/Footer.php';
} ?>