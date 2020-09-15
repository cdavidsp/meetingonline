<?php

$version = 42;








echo '<h1>'.$version.'</h1>';





$code =  $_GET["code"];



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://zoom.us/oauth/token?grant_type=authorization_code&code=".$code."&redirect_uri=https://vt2020.meetingonline.eu/oauth.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic b1dxVDZDQ1RUTW1XV29EWWFHZVR2QTpRNnJIaG5NNGg3Zkw5bTFWR1FtU1VXcGxuZU1kNVhYVg=="
   ),
));



$response = curl_exec($curl);

curl_close($curl);

$d=json_decode($response, true);
echo var_dump($d['access_token']);







?>

