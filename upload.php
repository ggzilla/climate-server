<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
echo "http://ben-server.local/uploads/" . basename($_FILES["file"]["name"]);
?>
