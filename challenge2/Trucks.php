<?php

require_once 'Vehicle.php';

class Trucks extends Vehicle 
{
    private int $capacity ;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energyType, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energyType);
        $this->capacity = $capacity;
    }

    public function capacityTest(): string
    {
        if($this->loading < $this->capacity) {
            return 'in filling';
        }

        return 'full';
    }

    public function getCapacity(): int 
    {
        return $this->capacity;
    }
    public function setCapacity($capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getLoading(): int 
    {
        return $this->loading;
    }
    public function setLoading($loading): self
    {
        $this->loading = $loading;
        return $this;
    }
}

?>