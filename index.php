<?php
//$jsonData = getDataAsJson($_GET['symbol']);
//echo $_GET['callback'] . '(' . $jsonData . ');';
//echo $_GET['symbol']

$url = "http://87.69.174.80:8080/sign?name=" . $_GET['name'] . '&sid=' . $_GET['sid'];
//echo $url;
$cont = file_get_contents($url);
echo $_GET['callback'] . '(' . $cont . ');';
//echo $cont;

//echo json_encode(array("name"=>"John","time"=>"2pm")); 
//$response = http_get("http://87.69.174.80:8080/sign", array("name"=>"tom","sid"=>"555"), $info);
//print_r($info);
?>
