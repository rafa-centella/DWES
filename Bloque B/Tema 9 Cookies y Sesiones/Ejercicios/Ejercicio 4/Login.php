<?php
include 'Includes/Sessions.php';
$message = '';
$user= [
    'correo' => '',
    'contra' => ''
];

$error = [
    'mail' => '',
    'pass' => ''
];

if ($logged_in) {
    header('Location: Account.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters['correo']['filter'] = FILTER_VALIDATE_EMAIL;
    $filters['contra']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['contra']['options']['regexp'] = '/[A-z0-9\/\:\@-_.,]{8,}/';

    $user['correo'] = $_POST['correo'] ?? '';
    $user['contra'] = $_POST['contra'] ?? '';

    $user_validate = filter_input_array(INPUT_POST, $filters);
    
    $error = [
        'mail' => ($user_validate['correo']) ? '' : 'Email incorrecto',
        'pass' => ($user_validate['contra']) ? '' : 'Minimo 8 caracteres'
    ];
    
    $invalid = implode($error);

    if ($invalid) {

        $message = 'Usuario o contraseña incorrectos';

    } else {

        if ($user['correo'] == $email && $user['contra'] == $password) {
            login();
            header('Location: Account.php');
            exit;
        }

    }
}
include 'Includes/Header.php';
?>
<section>
    <form class="formulario" action="Login.php" method="POST">
        <h2>Login </h2>
        <p><?= $message ?></p>
        <br><br>
        <label>Email: </label>
        <input type="text" name="correo" id="correo" placeholder="Introduce tu E-mail" maxlength="50" size="32" value="<?= htmlspecialchars($user['correo']) ?>" require /><br>
        <span class="error"><?= $error['mail'] ?></span><br>

        <label>Password: </label>
        <input type="password" name="contra" id="contra" maxlength="50" size="32" require /><br>
        <span class="error"><?= $error['pass'] ?></span><br><br>

        <input type="submit" value="Enviar" name="enviar" id="enviar" />
        
    </form>
</section>

<?php include 'Includes/Footer.php'; ?>