<?php
class Speedometer
{
    const MILES=0.621;
    const KM=1.609;

    public static function convertKmToMiles($valeur)
    {
        return round(($valeur*=self::MILES), 2);
    }

    public static function convertMilesToKm($valeur)
    {

        return round(($valeur*=self::KM), 2);
    }


}

//en dehors de la classe//
echo '10 KM/H correspond à '. Speedometer::convertKmToMiles(10). 'Miles' . '<br />';
echo '6,21 Miles correspond à '. Speedometer::convertMilesToKm(6.21). 'Km/H' . '<br />';
