<?php
$name = $_COOKIE['name'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    setcookie('name', $name);
}

if ($name == null) {
    $message = '
        <form action="Index.php" method="post">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" size="32" pattern="[A-z0-9\s\.]+" maxlength="40" placeholder="Escribe tu nombre" required /><br><br>
            <input type="submit" value="Enviar" name="enviar" id="enviar" />
        </form>
    ';
} else {
    $message = '
        <h2>Bienvenido de nuevo, ' . $name . '</h2>
    ';
}

include 'Includes/Header.php';
?>
<?= $message ?>
<?php include 'Includes/Footer.php'; ?>