<?php
include 'Includes/Header.php';
$user = [
    'mail' => '',
    'age' => '',
    'newsletter' => ''
];

$errors = [
    'mail' => '',
    'age' => '',
    'newsletter' => ''
];

$message = '';

function is_valid(int $number, int $min=0, int $max=1000): bool {
    return ($number >= $min and $number <= $max);
}

function is_text(string $string, int $min_character, int $max_character): bool {
    $count = mb_strlen($string);
    return ($count >= $min_character and $count <= $max_character);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user['mail'] = $_POST['mail'];
    $user['age'] = $_POST['age'];
    $user['newsletter'] = (isset($_POST['newsletter']) and $_POST['newsletter'] == true) ? true : false;

    $errors['mail'] = is_text($user['mail'], 5, 30) ? '' : 'Must be 5-30 characters';
    $errors['age'] = is_valid($user['age'], 16, 65) ? '' : 'You must be 16-65';
    $errors['newsletter'] = $user['newsletter'] ? '' : 'You must agree to the newsletter';

    $invalid = implode($errors);
    if ($invalid) {
        $message = 'Please correct the following errors:';
    } else {
        $message = 'Your data was valid';
    }

}

?>
<h1>Formulario de registro</h1>
<p><?= $message ?></p>
<form action="./Formulario.php" method="POST">
    <label for="mail">E-mail: <input type="text" name="mail" value="<?= htmlspecialchars($user['mail']) ?>"></label>
    <span class="error"><?= $errors['mail'] ?></span><br>
    <label for="age">Age: <input type="text" name="age" value="<?= htmlspecialchars($user['age']) ?>"></label>
    <span class="error"><?= $errors['age'] ?></span><br>
    <label for="newsletter"><input type="checkbox" name="newsletter" value="true" <?= ($user['newsletter']) ? 'checked' : '' ?>>I agree newsletter</label>
    <span class="error"><?= $errors['newsletter'] ?></span><br>
    <input type="submit" name="sent" id="enviar" value="Save" />
</form>

<?php
include_once 'Includes/Footer.php';
?>