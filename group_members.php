<?php

$url = "http://purple-dev.appspot.com/api/120112/GroupMembers";
$ch = curl_init();
 
$pfields = 'session_token=' . $_GET['session_token'] . '&group_id=' . $_GET['group_id'] . '&from=&max_results=15';
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
