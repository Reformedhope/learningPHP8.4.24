<?php

require_once'WeatherApiClientInterface.php';
class OpenWeatherMapClient implements WeatherApiClientInterface{
    public function getForecast($city){

        // call open weather map api using city parameter
//.. 
        //return some kind of response.
        return 'It is raining in ' . $city;
    }
}





?>