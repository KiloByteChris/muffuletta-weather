<?php
// Function to use curl to call the api and return json.
function callAPI($url) {
    $curl = curl_init(); // Start cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($curl);
    curl_close($curl);
    //echo $data;
    return $data;
}

function getWeather() {
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=vancouver,us';
    $apiParam = '&appid=';
    $apiKey = '0d78f016d75e6ca170516578566505bd';
    $url .= $apiParam;
    $url .= $apiKey;
    $weatherData = callAPI($url);

    //$weatherData = json_decode($weatherData);
    //$weatherData = json_encode($weatherData);
    //var_dump($weatherData);
    //print_r($weatherData);
    //echo $weatherData;
    //return $weatherData;
}

if(isset($_GET["action"])){
    //$data = json_encode($_GET);
    //$data = json_decode($data);
    $action = $_GET["action"];
    //$action($data);
    $action();
}
 ?>
