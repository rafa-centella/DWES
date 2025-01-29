<?php 
declare(strict_types=1);

function create_thumbnail(string $temporary, string $destination): bool {
    $image = new Imagick($temporary);
    $image->ThumbnailImage(200, 200, true);
    $image->writeImage($destination);
    return true;
}

function create_cropped_thumbnail(string $temporary, string $destination): bool {
    $image = new Imagick($temporary);
    $image->cropThumbnailImage(200, 200, true);
    $image->writeImage($destination);
    return true;
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