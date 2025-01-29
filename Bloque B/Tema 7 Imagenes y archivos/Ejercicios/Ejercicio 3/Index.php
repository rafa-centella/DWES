<?php 
declare(strict_types=1);

$moved = false;
$message = '';
$error = '';
$uploadPath = 'Images/';
$maxSize = 5242880;
$allowedTypes = ['image/jpeg','image/png'];
$allowedExts = ['jpeg', 'png'];

function createFilename (string $filename, string $uploadPath): string {
    
    $basename = pathinfo($filename, PATHINFO_FILENAME);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = preg_replace('/[^A-z0-9]/', '-', $basename);
    $i = 0;
    
    while (file_exists($uploadPath . $filename)) {
        $i = $i + 1;
        $filename = $basename . $i . '.' . $extension;
    }

    return $filename;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = ($_FILES['image']['size'] <= $maxSize) ? '' : 'Demasiado grande ';
    $type = mime_content_type($_FILES['image']['tmp_name']);
    $error .= in_array($type, $allowedTypes) ? '' : 'Tipo de archivo incorrecto ';
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $error .= in_array($ext, $allowedExts) ? '' : 'Extensión del archivo incorrecta.' ;
    
    if (!$error) {
        $filename = createFilename($_FILES['image']['name'], $uploadPath);
        $destination = $uploadPath . $filename;
        $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    }

    if ($moved === true) {
        $message = '<br><img src="' . $destination . '" /><br><p>Subida correctamente.</p>';
    } else {
        $message = '<b>No se ha podido realizar la subida del archivo, posibles errores encontrados:</b>' . $error;
    }
}
include 'Includes/Header.php';
?>
<br>
    <?= $message ?>
    <form action="Index.php" method="POST" enctype="multipart/form-data" >
        <label for="image" >Añade tu foto de perfil: </label>
        <input type="file" class="ancho" name="image" accept="image/*" id="image" /><br><br>
        <input type="submit" value="Subir" id="subir">
    </form>
<?php include_once 'Includes/Footer.php'; ?>