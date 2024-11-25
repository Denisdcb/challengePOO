<?php

    abstract class HighWay
    {
        protected array $currentVehicles = [];
        protected int $nbLane ;
        protected int $maxSpeed ;

        public function __construct(int $nbLane, int $maxSpeed)
        {
            $this->nbLane = $nbLane;
            $this->maxSpeed = $maxSpeed;
        }

        public function getCurrentVehicles(): array
        {
            return $this->currentVehicles;
        }
        public function setCurrentVehicles($vehicle): self
        {
            $this->currentVehicles = $vehicle;
            return $this;
        }

        public function getNbLane(): int
        {
            return $this->nbLane;
        }
        public function setNbLane($nbLane): self
        {
            $this->nbLane = $nbLane;
            return $this;
        }

        public function getMaxSpeed(): int
        {
            return $this->maxSpeed;
        }
        public function setMaxSpeed($maxSpeed): self
        {
            $this->maxSpeed = $maxSpeed;
            return $this;
        }

        abstract public function addVehicle(object $vehicle);
    }
?>