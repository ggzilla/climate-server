<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Sensor Data</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="sensor-data"></div>
    <script>
    $(document).ready(function() {
      $.get('http://rpi2.local:5000/sensor-data', function(data) {
        // Update HTML content with dynamic data
        $('#sensor-data').html(`
          <p>Temperature: ${data.temperature}°F</p>
          <p>Humidity: ${data.humidity}%</p>
          <p>VPD: ${data.vpd} kPa</p>
        `);
      });
    });
  </script>
</body>
</html>
