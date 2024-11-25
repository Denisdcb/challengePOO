<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle(object $vehicle): void
    {
        if($vehicle instanceof Cars) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}

?>