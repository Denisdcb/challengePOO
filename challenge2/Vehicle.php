<?php

class Vehicle
{
    protected int $nbWheels ;
    protected int $currentSpeed = 0 ;
    protected string $color ;
    protected int $nbSeats ;
    protected string $energyType ;
    protected int $energyLevel = 100 ;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbwheels(int $nbWheels): self
    {
        $this->nbWheels = $nbWheels ;
        return $this;
    }
    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): self
    {
        $this->currentSpeed = $currentSpeed ;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): self
    {
        $this->color = $color ;
        return $this;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): self
    {
        $this->nbSeats = $nbSeats ;
        return $this;
    }

    public function getEnergytype(): string
    {
        return $this->energyType;
    }
    public function setEnergyType(string $energyType): self
    {
        $this->energyType = $energyType ;
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): self
    {
        $this->energyLevel  = $energyLevel ;
        return $this;
    }

    public function start(): void
    {
        $this->energyLevel -= 10 ;
    }

    public function forward(): void
    {
        $this->setCurrentSpeed(50);
    }

    public function brake(): void
    {
        while($this->getCurrentSpeed() > 0) {
            $this->currentSpeed -= 10 ;
            echo  'vitesse  : ' . $this->getCurrentSpeed() . 'KM/H<br>';
        }
    }
}

?>