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
                <table class="table">
                    <tr>
                        <th>City Name</th>
                        <th>Temperature</th>
                        <th>Humidity</th>
                        <th>Wind Speed</th>
                        <th>Pressure</th>
                        <th>Datetime</th>
                    </tr>
                    <?php
                        include_once 'db.php';
                
                        $sql = "SELECT * FROM weather;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        foreach($result as $data) {
                    ?>
                
                    <tr>                
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['city_name']; ?></td>
                        <td><?php echo $data['humidity']; ?></td>
                        <td><?php echo $data['wind']; ?></td>
                        <td><?php echo $data['pressure']; ?></td>
                        <td><?php echo $data['date_time']; ?></td>
                
                    </tr>
                
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>