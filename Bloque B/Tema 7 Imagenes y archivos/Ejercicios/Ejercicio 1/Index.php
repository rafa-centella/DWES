<?php 
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['image']['error'] === 0) {
        $message = '<p><b>File: </b>' . $_FILES['image']['name'] . '<br>';
        $message .= 'The file has been uploaded successfully</p>';
    } else {
        $message = '<p>The file could not be uploaded</p>';
    }
}
include 'Includes/Header.php';
?>
<?= htmlspecialchars($message) ?>
<form action="Index.php" method="POST" enctype="multipart/form-data" >
    <label for="image" ><b>Upload file:</b></label>
    <input type="file" class="ancho" name="image" accept="image/*" id="image" /><br>
    <input type="submit" value="Upload" id="subir">
</form>
<?php include_once 'Includes/Footer.php'; ?>