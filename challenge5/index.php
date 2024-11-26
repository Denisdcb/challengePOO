<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Cars.php';
require_once 'Skate.php';
require_once 'Bike.php';

$car = new Cars('blue', 5);
$bike = new Bike('green', 1);

echo 'Phares de la voiture : ' . ($car->switchOff() ? 'Allumées' : 'Eteintes') . '<br>';
echo 'Allumage des phares.. <br>';
echo 'Phares de la voiture : ' . ($car->switchOn() ? 'Allumées' : 'Eteintes') . '<br>';
echo '<br>';
echo 'Dynamo du vélo : '. ($bike->switchOff() ? 'Allumée' : 'Eteinte' . '<br>');
echo 'Allumage de la lampe du vélo.. <br>';
echo 'Dynamo du vélo : '. ($bike->switchOn() ? 'Allumée' : 'Eteinte' . '<br>');
echo 'La dynamo est toujours eteinte, est ce que la vitesse est suprérieur a 10 KMH ? <br>';
echo 'Vitesse : ' . $bike->getCurrentSpeed() . 'KM/H <br>';
echo 'Augmentation de la vitesse ... <br>';
$bike->setCurrentSpeed(11);
echo 'Vitesse : ' . $bike->getCurrentSpeed() . 'KM/H <br>';
echo 'Test de la dynamo ..<br>';
echo 'Dynamo du vélo : '. ($bike->switchOn() ? 'Allumée' : 'Eteinte' . '<br>');

?>