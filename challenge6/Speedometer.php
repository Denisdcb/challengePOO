<?php

class Speedometer
{
    const MI = 0.621371 ;
    const KM = 1.60934 ;

    public static function convertKmToMiles(float $km): float
    {
        return $km * self::MI ;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return $miles * self::KM ;
    }

}

?>