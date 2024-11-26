<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Cars extends Vehicle implements LightableInterface
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

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}

?>