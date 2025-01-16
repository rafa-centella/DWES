<?php
include 'Includes/Header.php';

$ip = $_POST['ip'];

function validarIP($ip): bool {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        
        if (preg_match('/(10|127|172)\.(16|192)\.(168)\./', $ip)) {
            return false;
        }
        return true; 
    }
    return false; 
}
$valid_ip = validarIP($ip);
?>
<h1>Formulario de registro</h1>
<form action="./Formulario.php" method="POST">
    <label for="ip">Ip: <input type="text" name="ip" value="<?= ($valid_ip) ? htmlspecialchars($ip) : '0.0.0.0' ?>" required></label><br>
    <input type="submit"  class="enviar" value="Save" />
</form>
<pre><?php var_dump($ip); ?></pre>
<?php
include_once 'Includes/Footer.php';
?>