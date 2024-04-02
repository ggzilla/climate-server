<?php
// Execute Python script
$output = shell_exec('python3 /home/ben/plantcam/main.py 2>&1');
if ($output !== null) {
    echo $output;
} else {
    header("HTTP/1.1 500 Internal Server Error");
    echo $output;
    echo "Failed to execute Python script.";
}
?>
