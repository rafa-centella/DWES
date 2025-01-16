<?php 
declare (strict_types=1);
include 'Includes/Header.php';
$age = '';
$message = '';

function is_valid(int $number, int $min=0, int $max=1000): bool {
    return ($number >= $min and $number <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $valid = is_valid($age, 8, 16);
    if ($valid) {
        $message = 'Formulario enviado exitosamente'; ?>
        <h1>Registro</h1>
        <p><?= $message ?></p>
        <p><a href="./Registro.php">Volver atrás</a></p>
    <?php }
    else {
        $message = 'Error la edad no esta comprendida dentro del rango';
    }
}

else { ?>
    <p><?= $message ?></p>
    <h1>Formulario</h1>
    <form action="./Registro.php" method="post">
        <p>Name: <input type="text" name="name"></p>
        <p>Surname: <input type="text" name="surname"></p>
        <p>Age: <input type="text" name="age"></p>
        <p>Position: <input type="text" name="position"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Phone: <input type="text" name="phone"></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>
<?php }
include_once 'Includes/Footer.php'; ?>