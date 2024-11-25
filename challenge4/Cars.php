<?php

require_once 'Vehicle.php';

class Cars extends Vehicle
{
    private bool $hasParkBrake = true ;

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake ;
        return $this;
    }

    public function start(): void
    {
        parent::start();
        if($this->hasParkBrake = true) {
            throw new Exception("Frain a main actif");
        }
    }
}

?>