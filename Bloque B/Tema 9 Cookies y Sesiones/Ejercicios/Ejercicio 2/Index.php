<?php
$lenguaje = $_COOKIE['lang'] ?? null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lenguaje = $_POST['lenguaje'];
    setcookie('lang', $lenguaje);
}

if ($lenguaje == null) {
    $message = '
        <form action="Index.php" method="post">
            <select name="lenguaje" id="lenguaje">
                <option value="esp" selected>Español</option>
                <option value="en">Inglés</option>
            </select><br><br>

            <input type="submit" value="Enviar" name="enviar" id="enviar" />
            <br>
        </form>
    ';
} else {
    if ($lenguaje == 'esp') {
        $message = '
            <h2>Bienvenido a este sitio php</h2>
        ';
    }else {
        $message = '
            <h2>Welcome to this php site</h2>
        ';
    }
    
}

include 'Includes/Header.php';
?>
<?= $message ?>
<?php include 'Includes/Footer.php'; ?>