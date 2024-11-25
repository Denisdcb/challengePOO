<?php

require 'SimpsonsCars.php';
require 'Trucks.php';

echo 'Hommer car : <br><br>';
$homerCar = new SimpsonsCars('blue', 5, 'nuclear');
echo  'vitesse  : ' . $homerCar->getCurrentSpeed() . 'KM/H<br>';
echo 'niveau de carburant : ' . $homerCar->getEnergyLevel() . '<br>';

$homerCar->start();
echo 'niveau de carburant : ' . $homerCar->getEnergyLevel() . '<br>';

$homerCar->forward();
echo  'vitesse  : ' . $homerCar->getCurrentSpeed() . 'KM/H<br>';

$homerCar->brake();

echo '<br>Bart car : <br><br>';
$bartCar = new SimpsonsCars('blue', 5, 'nuclear');
echo  'vitesse  : ' . $bartCar->getCurrentSpeed() . 'KM/H<br>';
echo 'niveau de carburant : ' . $bartCar->getEnergyLevel() . '<br>';

$bartCar->start();
echo 'niveau de carburant : ' . $bartCar->getEnergyLevel() . '<br>';

$bartCar->forward();
echo  'vitesse  : ' . $bartCar->getCurrentSpeed() . 'KM/H<br>';

$bartCar->brake();

echo '<br>';

echo 'Moe truck : <br><br>';
$moeTruck = new Trucks('blue', 2, 'diesel', 51);
echo  'vitesse  : ' . $moeTruck->getCurrentSpeed() . 'KM/H<br>';
echo 'niveau de carburant : ' . $moeTruck->getEnergyLevel() . '<br>';
echo 'chargement : ' . $moeTruck->getLoading() . ' KG<br>';
echo 'capacité : ' . $moeTruck->capacityTest() . '<br>';

$moeTruck->start();
echo 'niveau de carburant : ' . $moeTruck->getEnergyLevel() . '<br>';

$moeTruck->forward();
echo  'vitesse  : ' . $moeTruck->getCurrentSpeed() . 'KM/H<br>';

$moeTruck->brake();


$moeTruck->setLoading(100);
echo 'chargement : ' . $moeTruck->getLoading() . ' KG<br>';
echo 'capacité : ' . $moeTruck->capacityTest() . '<br>';
?>