<?php 
declare (strict_types=1);

$asignature = '';
$message = '';
$asignatures = ['Math', 'physics', 'history', 'art'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $asignature = $_POST['asignature'] ?? '';
    $valid = (isset($_POST['asignature']) and $_POST['asignature' == true]) ? true : false;
    $message = $valid ? 'Asignatura elegida correctamente' : 'Escoge una asignatura';
}
include 'Includes/Header.php';
?>

<?= $message ?>
<form action = "Optativas.php" method = "POST">
    <h1>Elective</h1>
    <?php foreach ($asignatures as $option) { ?>
        <?= $option ?><input type="checkbox" name="asignature" value="<?= $option ?>" <?= ($asignature == $option) ? 'checked' : '' ?>>
    <?php } ?>
    <input type="submit" value="Save">
</form>

<?php include_once 'Includes/Footer.php'; ?>