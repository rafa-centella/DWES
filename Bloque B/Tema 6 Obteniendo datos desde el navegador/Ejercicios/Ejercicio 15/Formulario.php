<?php
include 'Includes/Header.php';

$user = [
    'mail' => '',
    'age' => '',
    'url' => '',
    'terms' => false
];

$errors = [
    'mail' => '',
    'age' => '',
    'url' => '',
    'terms' => ''
];

$sanitize = [
    'mail' => '',
    'age' => '',
    'url' => ''
];
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['mail'] = FILTER_VALIDATE_EMAIL;
    $filters['age']['filter'] = FILTER_VALIDATE_INT;
    $filters['age']['options']['min_range'] = 18;
    $filters['age']['options']['max_range'] = 65;
    $filters['url'] = FILTER_VALIDATE_URL;
    $filters['terms'] = FILTER_VALIDATE_BOOLEAN;

    $user = filter_input_array(INPUT_POST, $filters);
    $errors = [
        'mail' => ($user['mail']) ? '' : 'El campo es incorrecto, email no valido.',
        'age' => ($user['age']) ? '' : 'Debes tener entre 18 y 65 años.',
        'url' => ($user['url']) ? '' : 'El campo URL debe contener una URL valida.',
        'terms' => ($user['terms']) ? '' : 'Es obligatorio aceptar los terminos y condiciones.'
    ];
    $invalid = implode($errors);

    if ($invalid) {
        $message = 'Debes solucionar los fallos para continuar';
    } else {
        $message = 'Formulario enviado exitosamente';
    }

    $sanitize = [
        'mail' => filter_var($user['mail'], FILTER_SANITIZE_EMAIL),
        'age' => filter_var($user['age'], FILTER_SANITIZE_NUMBER_INT),
        'url' => filter_var($user['url'], FILTER_SANITIZE_URL)
    ];

}

?>
<h1>Formulario de registro</h1>
<?= $message ?>
<form action="./Formulario.php" method="POST">
    <label for="mail">Email: <input type="text" name="mail" value="<?= $sanitize['mail'] ?>" required></label>
    <span class="errors"><?= $errors['mail'] ?></span><br>
    <label for="age">Edad: <input type="text" name="age" value="<?=  $sanitize['age'] ?>" required></label>
    <span class="errors"><?= $errors['age'] ?></span><br>
    <label for="url">URL: <input type="text" name="url" value="<?= $sanitize['url'] ?>" required></label>
    <span class="errors"><?= $errors['url'] ?></span><br>
    <label for="terms"><input type="checkbox" name="terms" value="true" <?= ($user['terms']) ? 'checked' : '' ?> required> Aceptar los terminos y condiciones</label>
    <span class="errors"><?= $errors['terms'] ?></span><br>
    <input type="submit"  class="enviar" value="Save" />
</form>
<?php
include_once 'Includes/Footer.php';
?>