<?php

function makeserviceCurlRequest($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}

$url_arr=array("loripsum.net/api/2/short/headers.","https://randomuser.me/api/","https://uinames.com/api/?amount=1");//array of apis
$result=array();

if(isset($_GET) && !empty($_GET)){
  foreach($url_arr as $url){
  $result[]=makeserviceCurlRequest($url);
  }
}
  print_r(json_encode($result));
  
  ?>
