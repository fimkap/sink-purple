<?php

$url = "http://purple-dev.appspot.com/api/120112/tropo_register_sid";
$ch = curl_init();
 
$pfields = 'session_token=' . $_GET['session_token'] . '&device_id=' . $_GET['device_id'] . '&sid=' . $_GET['sid'];
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
