
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
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
