<?php 
include 'Includes/Header.php';
$events = ['Ceremonia de Apertura', 'Atletismo', 'Natación', 'Ciclismo', 'Ceremonia de Clausura'];
$age = '';
$activity = [];
$message = '';
$valid_age = '';
$valid_event = '';
$contador = 0;

function is_valid(int $number, int $min=0, int $max=1000): bool {
    return ($number >= $min and $number <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST['age'];
    $valid_age = is_valid($age, 18, 65);
    for ($i = 0; $i <= 4; $i++) {
        $actividades[$i] = (isset($_POST['cbox'.$i]) and $_POST['cbox'.$i] == true) ? true : false;
        if ($actividades[$i]) {
            $contador = $contador + 1;
            $activity[] = $_POST['cbox'.$i];
        }
    }
    $valid_event = ($contador >= 2) ? true : false;

    if ($valid_age and $valid_event) { ?>
        <h1>Formulario enviado exitosamente</h1>

    <?php } 
    else {
        if ($valid_age) {
            $message = 'Ha ocurrido un error, debes escoger más de un evento';?>
            <h1><?= $message ?></h1> <?php
        } elseif ($valid_event) {
            $message = 'Ha ocurrido un error, debes ser mayor de 18 años y menor de 65 para participar'; ?>
            <h1><?= $message ?></h1> <?php
        } else {
            $message = 'Ha ocurrido un error, campo edad y eventos escogidos';?>
            <h1><?= $message ?></h1> <?php
        }
    }
}
else { ?>
    <h1>Formulario de registro Olimpiadas 2024</h1>
    <p><?= $message ?></p>
    <form action="Voluntarios.php" method="POST">
        Nombre: <input type="text" name="name" />
        Edad: <input type="text" name="age" />
        Email: <input type="text" name="mail" />
        <h2>Eventos:</h2>
        <?php foreach ($events as $key => $values) { ?>
            <input type="checkbox" name="cbox<?= $key ?>" id="cbox<?= $key ?>" value="true" <?= ($activity == $values) ? 'checked' : '' ?> /><?= $values ?>
        <?php } ?>
        <br>
        <input type="submit" id="sent" value="Enviar" />
    </form>
<?php }
include_once 'Includes/Footer.php'; ?>