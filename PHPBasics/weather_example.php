<?php

class Weather
{
    public static $temperatureConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFahrenheit($c){
        return $c * 9 / 5 + 32;
    }
    public static function determineTemperatureCondition($f){
        if($f < 40){
            return self::$temperatureConditions[0]; // cold
        } else if($f < 70){
            return self::$temperatureConditions[1]; // mild
        }else{
            return self::$temperatureConditions[2]; // warm
        }
    }
}

echo Weather::determineTemperatureCondition(40);