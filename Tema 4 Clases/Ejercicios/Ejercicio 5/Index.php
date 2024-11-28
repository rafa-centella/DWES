<?php 
include 'Includes/Library.php';

$books = [new Book('Harry Potter y la piedra filosofal', 'J.K.Rowling', 350),
new Book('Harry Potter y la camara secreta', 'J.K.Rowling', 375),
new Book('Harry Potter y las reliquias de la muerte', 'J.K.Rowling', 475)];

$library = new Library($books);

require 'Includes/Header.php';
?>

<h2>Incluimos libro a la libreria</h2>
<p><?= ($library->addbook(new Book('Sinsajo', 'NPI', 389))) ? 'Se ha introducido correctamente' : 'No se ha podido añadir'; ?></p>
<hr>
<h2>Mostramos los libros de la librería</h2>
<p><?= $library->getBooks(); ?></p>
<hr>
<h2>Eliminamos el libro de la camara secreta</h2>
<p><?= ($library->removeBook('Harry Potter y la camara secreta')) ? 'Se ha eliminado correctamente' : 'No ha sido posible su eliminación'; ?></p>
<hr>
<h2>Mostramos de nuevo los libros de la librería</h2>
<p><?= $library->getBooks(); ?></p>

<?php include 'Includes/Footer.php'; ?>