<?php
include 'Includes/Header.php';

$form = filter_input_array(INPUT_POST);

?>
<h1>Formulario de registro</h1>
<form action="./Formulario.php" method="POST">
    <label for="mail">E-mail: <input type="text" name="mail"></label><br>
    <label for="age">Age: <input type="text" name="age"></label><br>
    <label for="newsletter"><input type="checkbox" name="newsletter" value="true">I agree newsletter</label><br>
    <input type="submit"  class="enviar" value="Save" />
</form>
<pre><?php var_dump($form); ?></pre>
<?php
include_once 'Includes/Footer.php';
?>