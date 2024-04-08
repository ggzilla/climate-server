<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Photos</title>

</head>
<body>
    <h1>Uploaded Photos</h1>
    <div class="gallery"> 
   <?php
    $uploadsDir = 'uploads/';
    $imageFiles = array_diff(scandir($uploadsDir), array('.', '..'));
    
    // Sort image files by modification date
    usort($imageFiles, function($a, $b) use ($uploadsDir) {
        $aTime = filemtime($uploadsDir . $a);
        $bTime = filemtime($uploadsDir . $b);
        return $bTime - $aTime;
    });
    
    $currentDate = '';
    foreach ($imageFiles as $file) {
        $fileFullPath = $uploadsDir . $file;
        $fileDate = date('Y-m-d', filemtime($fileFullPath));
        
        // Display date as a heading if it's a new date
        if ($fileDate != $currentDate) {
            echo "<h2>$fileDate</h2>";
            $currentDate = $fileDate;
        }
        
        // Display image
        echo "<img src='$fileFullPath' alt='$file'>";
    }
    ?>
    </div>
    <?php include 'layout.html'; ?>
</body>
</html>
