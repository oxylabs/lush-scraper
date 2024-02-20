<?php

$params = [
    'source' => 'universal_ecommerce',
    'url' => 'https://www.lush.com/us/en_us/c/hair-care?gad_source=1&gclid=cjwkcaiaungubhakeiwagid4am0kiglhmkfpbgcpf2dccwnx9sjfbaahgubt2cpwy2b8cq2hjv5eohochhgqavd_bwe',
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>