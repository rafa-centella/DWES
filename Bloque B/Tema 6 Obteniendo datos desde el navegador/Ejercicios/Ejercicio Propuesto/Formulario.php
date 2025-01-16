<?php
include 'Includes/Header.php';

$user = ['name' => '', 'mail' => '', 'tlf' => '', 'event' => '', 'terms' => false];
$errors = ['name' => '','mail' => '','tlf' => '','event' => '','terms' => ''];
$sanitize = ['name' => '','mail' => '','tlf' => ''];
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['name']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['name']['options']['regexp'] = '/^[A-z0-9\.]{2,50}$/';
    $filters['mail'] = FILTER_VALIDATE_EMAIL;
    $filters['tlf']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['tlf']['options']['regexp'] = '/^(6|9|7)[0-9]{9}$/';
    $filters['event']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['event']['options']['regexp'] = '/^(Presencial|Online)$/';
    $filters['terms'] = FILTER_VALIDATE_BOOLEAN;

    $user = filter_input_array(INPUT_POST, $filters);
    $errors = [
        'name' => ($user['name']) ? '' : 'El campo de nombre contiene caracteres invalidos.',
        'mail' => ($user['mail']) ? '' : 'El campo es incorrecto, email no valido.',
        'tlf' => ($user['tlf']) ? '' : 'Debes introducir un telefono movil o fijo (9 dígitos).',
        'event' => ($user['event']) ? '' : 'Es obligatorio escoger una opción.',
        'terms' => ($user['terms']) ? '' : 'Es obligatorio aceptar los terminos y condiciones.'
    ];
    $invalid = implode($errors);

    if ($invalid) {
        $message = 'Debes solucionar los fallos para continuar';
    } else {
        $message = 'Formulario enviado exitosamente';
    }

    $sanitize = [
        'name' => filter_var($user['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        'mail' => filter_var($user['mail'], FILTER_SANITIZE_EMAIL),
        'tlf' => filter_var($user['tlf'], FILTER_SANITIZE_NUMBER_INT)
    ];

}

?>
<h1>Formulario de registro</h1>
<?= $message ?>
<form action="./Formulario.php" method="POST">
<label for="name">Full Name: <input type="text" name="name" value="<?= $sanitize['name'] ?>"></label>
<span class="errors"><?= $errors['name'] ?></span><br>
    <label for="mail">Email: <input type="text" name="mail" value="<?= $sanitize['mail'] ?>"></label>
    <span class="errors"><?= $errors['mail'] ?></span><br>
    <label for="tlf">Teléfono: <input type="text" name="tlf" value="<?=  $sanitize['tlf'] ?>"></label>
    <span class="errors"><?= $errors['tlf'] ?></span><br>
    <h2>Evento:</h2>
    <input type="radio" name="event" value="Presencial">Presencial <input type="radio" name="event" value="Online">Online
    <span class="errors"><?= $errors['event'] ?></span><br><br>
    <label for="terms"><input type="checkbox" name="terms" value="true" <?= ($user['terms']) ? 'checked' : '' ?>> Aceptar los terminos y condiciones</label>
    <span class="errors"><?= $errors['terms'] ?></span><br>
    <input type="submit"  class="enviar" value="Save" />
</form>
<?php
include_once 'Includes/Footer.php';
?>