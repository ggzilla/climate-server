<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>3x3 Grow Tent</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>3x3 Grow Tent</h1>
    <?php include 'layout.html'; ?>
    <div id="sensor-data">
        <!-- Sensor data will be displayed here -->
    </div>

    <button id="capture-image">Capture Image</button>

    <div id="latest-image">
        <!-- Latest captured image will be displayed here -->
    </div>

    <script>
        $(document).ready(function() {
            // Retrieve and display sensor data
            $.get('http://rpi2.local:5000/sensor-data', function(data) {
                $('#sensor-data').html(`
                    <p>Temperature: ${data.temperature}°C</p>
                    <p>Humidity: ${data.humidity}%</p>
                    <p>VPD: ${data.vpd} kPa</p>
                `);
            });

            // Capture image when button is clicked
            $('#capture-image').click(function() {
                $.get('http://rpi2.local:5000/capture-image', function(response) {
                    // Display latest captured image
                    $('#latest-image').html(`<img src="uploads/${response}" alt="Latest Image">`);
                });
            });
        });
    </script>
</body>
</html>
