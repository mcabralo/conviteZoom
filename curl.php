<?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "api.zoom.us/v2/meetings/78844669956");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);
var_dump($output);
// close curl resource to free up system resources
curl_close($ch);
