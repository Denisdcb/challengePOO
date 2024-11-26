<?php

require_once 'Speedometer.php';

$km = 10 ;
$miles = 10 ;

echo 'Conversion KM vers MILES : <br>';
echo $km . 'KM vaudra : ' . Speedometer::convertKmToMiles($km) . 'MILES <br><br>';

echo 'Conversion MILES vers KM : <br>';
echo $miles . 'MILES vaudra : ' . Speedometer::convertMilesToKm($miles) . 'KM <br><br>';



?>