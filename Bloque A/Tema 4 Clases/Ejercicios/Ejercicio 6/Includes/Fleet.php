<?php
include 'Vehicle.php';

class Fleet {

    public function __construct(
        protected string $name,
        protected array $vehicles
    ) {}

    public function addVehicle(Vehicle $vehicle): bool {
        foreach ($this->vehicles as $value) {
            if ($vehicle->getlicensePlate() == $value->getlicensePlate()) {
                return false;
            }
        }
        $this->vehicles[] = $vehicle;
        return true;
    }

    public function listVehicles(): string {
        $result = '';
        foreach ($this->vehicles as $value) {
            $result .= $value->getDetails();
        }
        return $result;
    }

    public function listAvailableVehicles(): string {
        $result = '';
        foreach ($this->vehicles as $value) {
            if ($value->isAvailable() === true) {
                $result .= $value->getDetails();
            }
        }
        return $result;
    }
    
}
?>