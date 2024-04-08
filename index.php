
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
    <style>
        /* Styles for the image */
        img {
            max-width: 100%; /* Ensure the image doesn't exceed its container's width */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Remove any default spacing */
            margin: 0 auto; /* Center the image horizontally */
        }
        /* Styles for the container */
        .container {
            max-width: 800px; /* Adjust max-width as needed */
            margin: 0 auto; /* Center the container horizontally */
            padding: 20px; /* Add some padding for better readability */
        }
    </style>
</head>
<body>
	<div class="container">
        <?php include 'layout.html'; ?>
        <h1>Add Photo to Gallery!</h1>
            <button id="runScriptBtn">Take Photo</button>

            <script>
                document.getElementById('runScriptBtn').addEventListener('click', function() {
                    this.disabled = true;
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log('Python script executed successfully');
                                document.getElementById('successMessage').style.display = 'block';
                            } else {
                                console.error('Failed to execute Python script. Status code: ' + xhr.status);
                            }
                        }
                    };
                    xhr.open('GET', 'execute_script.php', true); // Change to your server-side script
                    xhr.send();
                });
            </script>

            <!-- Success Message -->
            <div id="successMessage" style="display: none; color: green;">Python script executed succesfully!</div>
    </div>
</body>
</html>
