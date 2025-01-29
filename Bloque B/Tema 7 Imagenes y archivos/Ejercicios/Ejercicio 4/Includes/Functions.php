<?php 
declare(strict_types=1);

function resize_image_gd(string $origPath, string $newPath, int $maxWidth, int $maxHeight): bool {
    $imageData = getimagesize($origPath); //Datos de la imagen en array
    $origWidth = $imageData[0];  //Obtenemos el ancho de la imagen en px
    $origHeight = $imageData[1]; //Alto de la imagen en px
    $mediaType = $imageData['mime']; //Tipo de archivo
    $newWidth = $maxWidth; //Ancho maximo de la nueva imagen
    $newHeight = $maxHeight; //Alto maximo de la nueva imagen
    $origRatio = $origWidth / $origHeight; //Ratio de la imagen original

    //Calculamos el nuevo tamaño
    if ($origWidth > $origHeight) {
        $newHeight = $newWidth / $origRatio;
    } else {
        $newWidth = $newHeight * $origRatio;
    }

    switch ($mediaType) {
        case 'image/jpeg' :
            $orig = imagecreatefromjpeg($origPath);
            break;
        case 'image/png' :
            $orig = imagecreatefrompng($origPath);
            break;
        case 'image/jpg' :
            $orig = imagecreatefromjpeg($origPath);
            break;
        case 'image/gif' :
            $orig = imagecreatefromgif($origPath);
            break;
    }

    $new = imagecreatetruecolor($newWidth, $newHeight); //Se crea una imagen en blanco

    imagecopyresampled($new, $orig, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight); //Se recorta y copia la imagen original en la imagen en blanco

    //Guardamos la imagen nueva en la carpeta Thumbs
    switch($mediaType) {
        case 'image/jpeg' : $result = imagejpeg($new, $newPath); break;
        case 'image/png' : $result = imagepng($new, $newPath); break;
        case 'image/gif' : $result = imagegif($new, $newPath); break;
        case 'image/jpg' : $result = imagejpeg($new, $newPath); break;
    }

    return $result;
}

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