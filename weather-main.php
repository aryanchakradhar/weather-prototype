<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather</title>
    <link rel="stylesheet" href="weather.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="container">
        <div class="weather-container">
            <form method="POST" action="/weather-prototype/weather.php">
                <div class="search">
                    <input name="city_name" id="input" type="text"  spellcheck="false" placeholder="Enter city name.">
                    <button id="btn" type="submit"> <img src="img/search.png"> </button>
                </div>
            </form>

            <div class="weather">
                <img src="images/clear.png" class="weather-icon">
                <h1 class="temp"></h1>
                <h2 class="city"></h2>

                <div class="details">
                    <div class="col">
                        <img src="images/humidity.png" alt="humidity">
                        <p class="humidity"></p>
                    </div>

                    <div class="col">
                        <img src="images/wind.png" alt="humidity">
                        <p class="wind"></p>
                    </div>
                </div>

            </div>

            <div>
                <a href="/weather-prototype/weather-table.php">See previous data</a>
            </div>

        </div>
    </div>

    <script src="weather.js"></script>
</body>

</html>