<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Cars.php';
require_once 'Skate.php';
require_once 'Bike.php';

$car = new Cars('blue', 5);
try {
    $car->start();
}  catch(Exception $e) {
    echo $e->getMessage();
    echo '<br>On retire le frain a main.. <br>';
    $car->setParkBrake(false);
    $message = 'Frein a main : ' . ($car->getParkBrake() ? 'Actif' : 'Innactif') ;
    echo $message;
} finally {
    echo "<br>Ma voiture roule comme un donuts...";
}



?>