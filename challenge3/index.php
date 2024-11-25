<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Cars.php';
require_once 'Skate.php';
require_once 'Bike.php';

$a4 = new MotorWay(4, 130);
$city = new ResidentialWay(2, 50);
$street = new PedestrianWay(1,20);
$voiture1 = new Cars('red', 4);
$voiture2 = new Cars('red', 4);
$bus = new Cars('blue', 30);
$skate = new Skate('black', 1);
$bike1 = new Bike('silver', 1);
$bike2 = new Bike('silver', 1);

$a4->addVehicle($voiture1);
$a4->addVehicle($bus);
var_dump($a4->getCurrentVehicles());

$street->addVehicle($voiture2);
$street->addVehicle($bus);
$street->addVehicle($skate);
$street->addVehicle($bike1);
var_dump($street->getCurrentVehicles());

$city->addVehicle($voiture2);
$city->addVehicle($bus);
$city->addVehicle($skate);
$city->addVehicle($bike1);
var_dump($city->getCurrentVehicles());



?>