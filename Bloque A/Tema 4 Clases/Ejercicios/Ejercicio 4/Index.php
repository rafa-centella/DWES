<?php 
include 'Includes/Library.php';
$library = new Library('Puente Nuevo');
require 'Includes/Header.php';
?>

<h1>Bienvenido a liberia <?= $library->getLibaryName(); ?></h1>
<br>
<h2>Incluimos los saga de libros de los juegos del hambre</h2>
<p><?= ($library->addbook('Los juegos del hambre')) ? 'Se ha introducido correctamente' : 'Este libro ya existe en la libreria'; ?></p>
<p><?= ($library->addbook('En llamas')) ? 'Se ha introducido correctamente' : 'Este libro ya existe en la libreria'; ?></p>
<p><?= ($library->addbook('Sinsajo')) ? 'Se ha introducido correctamente' : 'Este libro ya existe en la libreria'; ?></p>
<hr>
<h2>Incluimos un libro ya existente como es sinsajo</h2>
<p><?= ($library->addbook('Sinsajo')) ? 'Se ha introducido correctamente' : 'Este libro ya existe en la libreria'; ?></p>
<hr>
<h2>Cambio el nombre de la libreria</h2>
<p><?= ($library->setLibraryName('Guadalquivir')) ? 'Se ha modificado el nombre' : 'No se ha podido modificar el nombre'; ?></p>
<h3>Mostramos nuevo nombre</h3>
<p><?= $library->getLibaryName(); ?></p>
<hr>
<h2>Mostramos los libros almacenados</h2>
<p><?= $library->getBooks(); ?></p>
<hr>
<h2>Eliminamos el libro Los juegos del hambre</h2>
<p><?= ($library->removeBook('Los juegos del hambre')) ? 'Se ha eliminado con exito' : 'No se ha podido eliminar. No ha sido encontrado en la libreria'; ?></p>
<h3>Eliminamos un libro que no existe</h3>
<p><?= ($library->removeBook('Harry Potter: Las reliquias de la muerte')) ? 'Se ha eliminado con exito' : 'No se ha podido eliminar. No ha sido encontrado en la libreria'; ?></p>
<hr>
<h2>Mostramos de nuevo los libros almacenados</h2>
<P><?= $library->getBooks(); ?></P>

<?php include 'Includes/Footer.php'; ?>