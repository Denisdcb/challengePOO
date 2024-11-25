<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function addVehicle(object $vehicle): void
    {
        if($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}

?>