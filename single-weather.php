<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>weather</title>
        <link rel="stylesheet" href="weather.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>
    <body>
        <div class="weather-table">
            <div>
                <a href="/weather-prototype/weather-main.php">Go back</a>
                <div class="single">

                    <?php
                        include_once 'db.php';

                
                        $sql = "SELECT * FROM weather WHERE city_name='Highland';";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        foreach($result as $data) {
                    ?>

                        <div class="single-item">
                            <div class="single-date"><?php echo date('Y-m-d', strtotime($data['date_time'])); ?></div>
                            <img src="images/clouds.png" class="single-image">
                            <div class="single-city"><?php echo $data['city_name']; ?></div>
                            <div class="single-temp"><?php echo $data['temperature']; ?> °C</div>
                            <div class="single-data">
                                <img src="images/wind.png" alt="wind">
                                <div><?php echo $data['wind']; ?></div>
                            </div>
                            <div class="single-data">
                                <img src="images/humidity.png" alt="humidity">
                                <div><?php echo $data['humidity']; ?></div>
                            </div>
                            <div class="single-data">
                                <img src="images/pressure.png" alt="humidity">
                                <div><?php echo $data['pressure']; ?></div>
                            </div>
                        </div>
                
                    <?php } ?>

                    </div>

                </table>
            </div>
        </div>
    </body>
</html>