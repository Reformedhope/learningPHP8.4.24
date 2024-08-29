<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php
    require 'DarkSkyApiclient.php';
    require 'OpenWeatherMapClient.php';


    $weatherApiClient = new OpenWeatherMapClient();
    $forecast = $weatherApiClient->getForecast('New  York');

   // $weatherApi = new OpenWeatherMapClient();
    //$forcast2 = $weatherApi->getForecast('Birmington')

    ?>
    <h1>WeatherApp</h1>
    <p><?php echo $forecast?></p>
    


</body>
</html>