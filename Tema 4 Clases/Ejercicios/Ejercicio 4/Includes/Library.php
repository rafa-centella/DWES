<?php
declare(strict_types= 1);

//Creamos la clase Library
class Library {

    //Defino el constructor
    public function __construct(
        protected string $LibraryName,
        protected array $books = [],
    ) {}

    //Metodo para añadir libros comprobando que no existan ya
    public function addbook(string $title): bool {
        foreach ($this->books as $book) {
            if ($book === $title) {
                return false;
            }
        }
        $this->books[] = $title;
        return true;
    }

    //Metodo para devolver el nombre de la librería.
    public function getLibaryName(): string {
        return $this->LibraryName;
    }

    //Metodo para cambiar el nombre a la librería
    public function setLibraryName(string $name): bool {
        $this->LibraryName = $name;
        return true;
    }

    //Metodo para eliminar un libro por su título
    public function removeBook(string $book): bool {
        foreach($this->books as $key => $title){
            if($title === $book){
                unset($this->books[$key]);
                $this->books = array_values($this->books);
                return true;
            }
        }

        return false;

    }

    //Metodo para mostar el array de libros
    public function getBooks(): string {
        $result = '(';
        foreach($this->books as $book) {
            $result .= $book . ",";
        }
        $result .= ')';
        return $result;
    }
}
?>