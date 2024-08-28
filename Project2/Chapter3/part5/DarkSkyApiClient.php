<?php

require_once 'WeatherApiClientInterface.php';
class DarkSkyApiClient implements WeatherApiClientInterface{
    public function getForecast($city){

        // get the lat and long of city

        // call dark sky API using lat/long

        // return some kind of value. 

        return 'It is raining in ' . $city;
     }

}




?>