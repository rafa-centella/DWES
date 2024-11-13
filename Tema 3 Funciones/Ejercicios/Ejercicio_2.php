<?php
    function create_logo() {
        return '<img src="Images/Logo.png" alt="Logo">';
    }

    function create_copyright_notice() {
        $year = date('Y');
        $message = '&copy; ' . 'The Candy Store' . $year;
        return $message;
    }
?>

<!DOCTYPEhtml>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Introduciendo el nombre de empresa en funcion">
        <meta name="author" content="Rafael Centella Guijarro">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="Styles/Style.css">
    </head>
    <body>
        <header>
            <h1><?php write_logo() ?>TheCandyStore</h1>
        </header>
        <article>
            <h2>Welcome to the Candy Store</h2>
        </article>
        <footer>
            <?php create_logo() ?>
            <?php create_copyright_notice() ?>
        </footer>
    </body>
</html>