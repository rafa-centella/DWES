<?php
declare(strict_types= 1);

class Vehicle {

    public function __construct(
        protected string $make,
        protected string $model,
        protected string $licensePlate,
        protected bool $available
    ) {}

    public function getDetails(): string {
        $result = "Marca: " . $this->make . '<br>Modelo: ' . $this->model . '<br>Matricula: ' . $this->licensePlate . "<br><br>";
        return $result;
    }

    public function isAvailable(): bool {
        return $this->available;
    }

    public function getlicensePlate(): string {
        return $this->licensePlate;
    }
}

?>