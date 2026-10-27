```php
<?php

header("Content-Type: application/json");

$city = $_GET['city'] ?? '';
$city = trim($city);

$weatherData = [

    "Ariyalur" => [
        "temperature" => "31°C",
        "condition" => "Sunny",
        "humidity" => "62%",
        "wind" => "13 km/h"
    ],

    "Chengalpattu" => [
        "temperature" => "32°C",
        "condition" => "Partly Cloudy",
        "humidity" => "68%",
        "wind" => "14 km/h"
    ],

    "Chennai" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "65%",
        "wind" => "15 km/h"
    ],

    "Coimbatore" => [
        "temperature" => "28°C",
        "condition" => "Cloudy",
        "humidity" => "72%",
        "wind" => "11 km/h"
    ],

    "Cuddalore" => [
        "temperature" => "31°C",
        "condition" => "Partly Cloudy",
        "humidity" => "70%",
        "wind" => "16 km/h"
    ],

    "Dharmapuri" => [
        "temperature" => "30°C",
        "condition" => "Sunny",
        "humidity" => "60%",
        "wind" => "12 km/h"
    ],

    "Dindigul" => [
        "temperature" => "30°C",
        "condition" => "Sunny",
        "humidity" => "61%",
        "wind" => "10 km/h"
    ],

    "Erode" => [
        "temperature" => "31°C",
        "condition" => "Sunny",
        "humidity" => "58%",
        "wind" => "13 km/h"
    ],

    "Kallakurichi" => [
        "temperature" => "31°C",
        "condition" => "Partly Cloudy",
        "humidity" => "64%",
        "wind" => "12 km/h"
    ],

    "Kancheepuram" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "66%",
        "wind" => "14 km/h"
    ],

    "Karur" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "57%",
        "wind" => "11 km/h"
    ],

    "Krishnagiri" => [
        "temperature" => "27°C",
        "condition" => "Cloudy",
        "humidity" => "70%",
        "wind" => "9 km/h"
    ],

    "Madurai" => [
        "temperature" => "34°C",
        "condition" => "Sunny",
        "humidity" => "60%",
        "wind" => "14 km/h"
    ],

    "Mayiladuthurai" => [
        "temperature" => "31°C",
        "condition" => "Partly Cloudy",
        "humidity" => "72%",
        "wind" => "15 km/h"
    ],

    "Nagapattinam" => [
        "temperature" => "30°C",
        "condition" => "Cloudy",
        "humidity" => "75%",
        "wind" => "18 km/h"
    ],

    "Namakkal" => [
        "temperature" => "30°C",
        "condition" => "Sunny",
        "humidity" => "59%",
        "wind" => "12 km/h"
    ],

    "Perambalur" => [
        "temperature" => "31°C",
        "condition" => "Sunny",
        "humidity" => "61%",
        "wind" => "13 km/h"
    ],

    "Pudukkottai" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "63%",
        "wind" => "14 km/h"
    ],

    "Ramanathapuram" => [
        "temperature" => "32°C",
        "condition" => "Partly Cloudy",
        "humidity" => "74%",
        "wind" => "20 km/h"
    ],

    "Ranipet" => [
        "temperature" => "31°C",
        "condition" => "Sunny",
        "humidity" => "64%",
        "wind" => "12 km/h"
    ],

    "Salem" => [
        "temperature" => "29°C",
        "condition" => "Cloudy",
        "humidity" => "65%",
        "wind" => "10 km/h"
    ],

    "Sivaganga" => [
        "temperature" => "33°C",
        "condition" => "Sunny",
        "humidity" => "58%",
        "wind" => "13 km/h"
    ],

    "Tenkasi" => [
        "temperature" => "28°C",
        "condition" => "Cloudy",
        "humidity" => "78%",
        "wind" => "11 km/h"
    ],

    "Thanjavur" => [
        "temperature" => "31°C",
        "condition" => "Partly Cloudy",
        "humidity" => "70%",
        "wind" => "15 km/h"
    ],

    "Theni" => [
        "temperature" => "29°C",
        "condition" => "Cloudy",
        "humidity" => "73%",
        "wind" => "10 km/h"
    ],

    "The Nilgiris" => [
        "temperature" => "22°C",
        "condition" => "Cloudy",
        "humidity" => "80%",
        "wind" => "8 km/h"
    ],

    "Thoothukudi" => [
        "temperature" => "33°C",
        "condition" => "Sunny",
        "humidity" => "68%",
        "wind" => "21 km/h"
    ],

    "Tiruchirappalli" => [
        "temperature" => "33°C",
        "condition" => "Sunny",
        "humidity" => "59%",
        "wind" => "14 km/h"
    ],

    "Tirunelveli" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "62%",
        "wind" => "16 km/h"
    ],

    "Tirupathur" => [
        "temperature" => "28°C",
        "condition" => "Cloudy",
        "humidity" => "69%",
        "wind" => "10 km/h"
    ],

    "Tiruppur" => [
        "temperature" => "29°C",
        "condition" => "Partly Cloudy",
        "humidity" => "63%",
        "wind" => "12 km/h"
    ],

    "Tiruvallur" => [
        "temperature" => "32°C",
        "condition" => "Sunny",
        "humidity" => "67%",
        "wind" => "14 km/h"
    ],

    "Tiruvannamalai" => [
        "temperature" => "31°C",
        "condition" => "Sunny",
        "humidity" => "60%",
        "wind" => "13 km/h"
    ],

    "Tiruvarur" => [
        "temperature" => "31°C",
        "condition" => "Partly Cloudy",
        "humidity" => "73%",
        "wind" => "15 km/h"
    ],

    "Vellore" => [
        "temperature" => "30°C",
        "condition" => "Sunny",
        "humidity" => "61%",
        "wind" => "11 km/h"
    ],

    "Viluppuram" => [
        "temperature" => "32°C",
        "condition" => "Partly Cloudy",
        "humidity" => "69%",
        "wind" => "14 km/h"
    ],

    "Virudhunagar" => [
        "temperature" => "33°C",
        "condition" => "Sunny",
        "humidity" => "57%",
        "wind" => "12 km/h"
    ],

    /* Pondicherry / Puducherry - Union Territory */

    "Pondicherry" => [
        "temperature" => "30°C",
        "condition" => "Partly Cloudy",
        "humidity" => "70%",
        "wind" => "12 km/h"
    ]

];


/* Case-insensitive city search */

$foundCity = null;

foreach ($weatherData as $name => $weather) {

    if (strtolower($name) == strtolower($city)) {

        $foundCity = $name;
        break;
    }
}


/* Send JSON response */

if ($foundCity !== null) {

    echo json_encode([
        "success" => true,
        "city" => $foundCity,
        "weather" => $weatherData[$foundCity]
    ]);

} else {

    echo json_encode([
        "success" => false,
        "message" => "Weather data not available for \"$city\""
    ]);

}

?>
```

### How to test

Save it as:

```text
C:\xampp\htdocs\weather_ajax\weather.php
```

Start **Apache** in XAMPP.

Then test directly in your browser:

```text
http://localhost/weather_ajax/weather.php?city=Chennai
```

You should get:

```json
{
    "success": true,
    "city": "Chennai",
    "weather": {
        "temperature": "32°C",
        "condition": "Sunny",
        "humidity": "65%",
        "wind": "15 km/h"
    }
}
```

You can also test:

```text
http://localhost/weather_ajax/weather.php?city=Madurai
```

or even:

```text
http://localhost/weather_ajax/weather.php?city=chennai
```

The last one works because we changed the search to **case-insensitive**.

**Important:** These are demonstration values for your AJAX + JSON practical, not live weather readings.
