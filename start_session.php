<?php

$url = "http://purple-dev.appspot.com/api/120112/StartSession";
$ch = curl_init();
 
$pfields = 'session_token=&user=' . $_GET['user'] . '&client=' . $_GET['client'];
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $pfields);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADERS, array('Content-Type: application/x-www-form-urlencoded'));
 
$response = curl_exec($ch);
//echo $response;

curl_close($ch);
echo $_GET['callback'] . '(' . $response . ');';

?>
