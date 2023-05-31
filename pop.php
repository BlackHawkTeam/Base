//PHP
<?php

// Get the file data
$fileData = file_get_contents($_FILES['file']['tmp_name']);

// Create a web request to the upload URL
$request = curl_init($uploadUrl);
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request, CURLOPT_POSTFIELDS, $fileData);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($request);

// Close the request
curl_close($request);

?>
