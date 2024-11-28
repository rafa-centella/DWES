<?php
declare(strict_types= 1);

class Book {

    public function __construct(
        protected string $title,
        protected string $author,
        protected int $num_pag
    ) {}

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle($title): bool {
        if ($title) {
            $this->title = $title;
            return true;
        }
        return false;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setAuthor(string $author): bool {
        if ($author) {
            $this->author = $author;
            return true;
        }
        return false;
    }

    public function getNumPag(): int {
        return $this->num_pag;
    }

    public function setNumPag(int $num_pag): bool {
        if ($num_pag) {
            $this->num_pag = $num_pag;
            return true;
        }
        return false;
    }
}
?>