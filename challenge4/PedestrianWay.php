<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle(object $vehicle): void
    {
        if($vehicle instanceof Skate or $vehicle instanceof Bike) {
            $this->currentVehicles[] = $vehicle ;
        }
    }
}

?>