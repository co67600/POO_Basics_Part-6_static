<?php
class Speedometer
{

    public static function convertKmToMiles($valeur1)
    {
        return round(($valeur1*0.621371), 2);
    }

    public static function convertMilesToKm($valeur2)
    {

        return round(($valeur2/0.621371), 2);
    }


}
//en dehors de la classe //
echo '10 KM/H correspond à '. Speedometer::convertKmToMiles(10). 'Miles' . '<br />';
echo '6,21 Miles correspond à '. Speedometer::convertMilesToKm(6.21). 'Km/H' . '<br />';
