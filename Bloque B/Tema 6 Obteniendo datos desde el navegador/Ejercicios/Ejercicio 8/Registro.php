<?php 
include 'Includes/Header.php';

$submitted = $_GET['sent'] ?? '';
if ($submitted === 'submitted') {
    $name = $_GET['name'] . $_GET['surname'];
    $age = $_GET['age'];
    $position = $_GET['position'];
    $email = $_GET['email'];
    $phone = $_GET['phone']; ?>
    <h1>Se ha enviado el formulario correctamente.</h1>
    <h2>Los datos enviados son:</h2>
    <ul>
        <li>Nombre y Apellidos: <?= htmlspecialchars($name) ?></li>
        <li>Edad: <?= htmlspecialchars($age) ?></li>
        <li>Posición: <?= htmlspecialchars($position) ?></li>
        <li>Email: <?= htmlspecialchars($email) ?></li>
        <li>Phone: <?= htmlspecialchars($phone) ?></li>
    </ul>
    <h2><a href="./Registro.php">Volver atrás</a></h2>
<?php } else { ?>
    <h1>Formulario</h1>
    <form action="./Registro.php" method="get">
        <p>Name: <input type="text" name="name"></p>
        <p>Surname: <input type="text" name="surname"></p>
        <p>Age: <input type="text" name="age"></p>
        <p>Position: <input type="text" name="position"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Phone: <input type="text" name="phone"></p>
        <p><input type="submit" name="sent" value="submitted"></p>
    </form>
<?php } 

include_once 'Includes/Footer.php'; 
?>