<?php

  //$url = $_POST['url'];
  $url = 'https://blujay75-developer-edition.eu37.force.com/services/apexrest/Account/0012400000EEdUVAA1';

  //Pass the fields to a string
  $fields_string = 
    "code=" . $_POST['code']
    . "&grant_type=authorization_code"
    . "&client_id=" . $_POST['client_id']
//    . "&client_secret=" . $_POST['client_secret']
    . "&redirect_uri=" . urlencode("https://dated-exchange-rate.herokuapp.com/");

  $cx = curl_init();
    curl_setopt($cx, CURLOPT_URL,$url);
    curl_setopt($cx, CURLOPT_GET, true);
    //curl_setopt($cx, CURLOPT_POST, true);
    //curl_setopt($cx, CURLOPT_POSTFIELDS,$fields_string);
    curl_setopt($cx, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($cx, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($cx, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cx, CURLOPT_FOLLOWLOCATION, FALSE);
  $init_response = curl_exec($cx);
  
//  echo $init_response;

  // JSON Decode the response to get the Access Key
  $json = json_decode($init_response, true);
  echo '<hr/>ContentID: ' . $json['ContentID'];
  echo '<hr/>Status: ' . $json['Status'];

  curl_close($cx);
?>
