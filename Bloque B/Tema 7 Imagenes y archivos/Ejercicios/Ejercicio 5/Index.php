<?php 
require_once 'Includes/Functions.php';

$moved = false;
$message = '';
$error = '';
$maxSize = 5000000;
$allowedTypes = ['image/jpeg','image/png', 'image/gif', 'image/jpg'];
$allowedExts = ['jpeg', 'png', 'gif', 'jpg'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = ($_FILES['image']['size'] <= $maxSize) ? '' : 'Demasiado grande ';
    
    if (!$error) {
        $uploadPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Uploads' . DIRECTORY_SEPARATOR;
        $filename = createFilename($_FILES['image']['name'], $uploadPath);
        $destination = $uploadPath . $filename;
        $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        $thumbPath = $uploadPath . 'Thumbs' . DIRECTORY_SEPARATOR . $filename;
        //$resize = create_thumbnail($destination, $thumbPath);
        $cropped = create_cropped_thumbnail($destination, $thumbPath);
    }
    $variableImagen = './Uploads/Thumbs/' . $filename;
    if ($moved === true) {
        $message = '<br><img src="' . $variableImagen . '" /><br>Subida correctamente.';
    } else {
        $message = '<b>No se ha podido realizar la subida del archivo, posibles errores encontrados:</b>' . $error;
    }
}
include 'Includes/Header.php';
?>
<br>
    <p><?= $message ?></p>
    <form action="Index.php" method="POST" enctype="multipart/form-data" >
        <label for="image" >Añade foto de producto: </label>
        <input type="file" class="ancho" name="image" accept="image/*" id="image" /><br><br>
        <input type="submit" value="Subir" id="subir">
    </form>
<?php include_once 'Includes/Footer.php'; ?>