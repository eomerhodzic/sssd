<?php 

$url = 'https://rest.nexmo.com/sms/json';
$fields = array(
	'from' => "Elvedina",
	'text' => "elvedina, ovo je test poruka",
	'to' => "38766005860",
	'api_key' => "5e0d6287",
	'api_secret' => "6yaEnRgdClQ2zV4R",
);

//url-ify the data for the POST
$fields_string="";
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

?>