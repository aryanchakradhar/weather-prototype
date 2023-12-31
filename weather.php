<?php

include_once 'db.php';

// Get city name from the form interface
$city = $_POST['city_name'];

// Define API key and url
$apiKey = "207688ebaefdebb79a96c8d009707b32";
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apiKey . "&units=metric";

// Fetch data from API
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

// Get response from API
$data = json_decode($response);
$city_name = $data->name;
$temperature = $data->main->temp;
$humidity = $data->main->humidity;
$wind = $data->wind->speed;
$pressure = $data->main->pressure;
$date_time = date('Y-m-d H:i:s', $data->dt);
// $date_time = '2023-08-28 12:46:20';


// Insert variable values to database
$sql = "INSERT INTO weather (city_name, temperature, humidity, wind, pressure, date_time) 
          VALUES ('$city_name', '$temperature', '$humidity', '$wind', '$pressure', '$date_time');";
mysqli_query($conn, $sql);

$values = array (
    'cod' => $data->cod,
    'name' => $data->name,
    'main' => array (
        'temp' => $data->main->temp,
        'humidity' => $data->main->humidity,
    ),
    'wind' => array (
        'speed' => $data->wind->speed,
    ),
    'weather' => array (
        '0' => array (
            'main' => $data->weather[0]->main,
        )
    )
);

// Redirect back to the form interface
header('Content-Type: application/json');
echo json_encode($values);

?>