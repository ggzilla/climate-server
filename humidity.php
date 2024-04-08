<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Index Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Main Index Page</h1>
    <div id="sensor-data"></div>

    <script>
        $(document).ready(function() {
            $.get('http://rpi2.local:5000/sensor-data', function(data) {
                $('#sensor-data').html(`
                    <p>Temperature: ${data.temperature}°C</p>
                    <p>Humidity: ${data.humidity}%</p>
                    <p>VPD: ${data.vpd} kPa</p>
                `);
            });
        });
    </script>
</body>
</html>
