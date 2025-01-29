<?php 
$message = '';
$moved = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['image']['error'] === 0) {
        $temp = $_FILES['image']['tmp_name'];
        $path = 'Images' . $_FILES['image']['name'];
        $moved = move_uploaded_file($temp, $path);
    }

    if ($moved) {
        $message = '<img src="' . $path . '">';
    } else {
        $message = '<p>The file could not be saved.</p>';
    }
}
include 'Includes/Header.php';
?>
<?= $message ?>
<form action="Index.php" method="POST" enctype="multipart/form-data" >
    <label for="image" ><b>Añade tu foto de perfil: </b></label>
    <input type="file" class="ancho" name="image" accept="image/*" id="image" /><br>
    <input type="submit" value="Upload" id="subir">
</form>
<?php include_once 'Includes/Footer.php'; ?>