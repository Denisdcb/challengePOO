<?php

require 'SimpsonsCars.php';

echo 'Hommer car : <br><br>';
$homerCar = new SimpsonsCars('blue', 5, 'nuclear');
echo  'vitesse  : ' . $homerCar->getCurrentSpeed() . 'KM/H<br>';
echo 'niveau de carburant : ' . $homerCar->getEnergyLevel() . '<br>';

$homerCar->start();
echo 'niveau de carburant : ' . $homerCar->getEnergyLevel() . '<br>';

$homerCar->forward();
echo  'vitesse  : ' . $homerCar->getCurrentSpeed() . 'KM/H<br>';

$homerCar->brake();
echo  'vitesse  : ' . $homerCar->getCurrentSpeed() . 'KM/H<br><br>';

echo 'Bart car : <br><br>';
$bartCar = new SimpsonsCars('blue', 5, 'nuclear');
echo  'vitesse  : ' . $bartCar->getCurrentSpeed() . 'KM/H<br>';
echo 'niveau de carburant : ' . $bartCar->getEnergyLevel() . '<br>';

$bartCar->start();
echo 'niveau de carburant : ' . $bartCar->getEnergyLevel() . '<br>';

$bartCar->forward();
echo  'vitesse  : ' . $bartCar->getCurrentSpeed() . 'KM/H<br>';

$bartCar->brake();
echo  'vitesse  : ' . $bartCar->getCurrentSpeed() . 'KM/H<br>';


?>