<?php
declare(strict_types= 1);
class Product {
    public int $id;
    public string $name;
    public float $price;
    public int $stock;

    public function __construct(int $id, string $name, float $price = 9.99, int $stock = 10) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

}
?>