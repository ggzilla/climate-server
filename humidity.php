<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="sensor-data"></div>
    <script>
        $(document).ready(function() {
            $.get('http://rpi2.local:5000/sensor-data', function(data) {
                // Parse JSON response
                var sensorData = JSON.parse(data);

                // Update HTML content with sensor data
                $('#sensor-data').html(`
                    <p>Temperature: ${sensorData.temperature.toFixed(2)}°C</p>
                    <p>Humidity: ${sensorData.humidity.toFixed(2)}%</p>
                    <p>VPD: ${sensorData.vpd.toFixed(2)} kPa</p>
                `);
            });
        });
    </script>
</body>
</html>
