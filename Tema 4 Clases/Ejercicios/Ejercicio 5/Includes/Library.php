<?php
include 'Book.php';

class Library {
    public function __construct(
        protected array $books = []
    ) {}

    public function getBooks(): string {
        $result = "(<br>";
        foreach ($this->books as $key => $book) {
            
            $result .= 'Título: ' . $book->getTitle() . ',' . '<br>Autor: ' . $book->getAuthor() . ',<br>Páginas: ' . $book->getNumPag() . '<br>'; 
        }
        $result .= ')';
        return $result;
    }

    public function addBook(Book $book): bool {
        foreach ($this->books as $value) {
            if ($book == $value) {
                return false;
            }
        }
        $this->books[] = $book;
        return true;
    }

    public function removeBook(string $title): bool {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() == $title) {
                unset($this->books[$key]);
                $this->books = array_values($this->books);
                return true;
            }
        }
        return false;
    }
}
?>