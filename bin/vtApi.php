<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Virus Total API Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>VT Search Results</h2>
<hr>
<?php

include_once 'session.php';

$data = array('apikey' => $_SESSION['apiKey'], 'ip' => $_GET['ip']);
$crl = curl_init();
$url = 'https://www.virustotal.com/vtapi/v2/ip-address/report?';
$url .= http_build_query($data);
curl_setopt($crl, CURLOPT_URL, $url);
curl_setopt($crl, CURLOPT_VERBOSE, 1);
curl_setopt($crl, CURLOPT_ENCODING, 'gzip-deflate');
curl_setopt($crl, CURLOPT_USERAGENT, "gzip, My php curl client");
curl_setopt($crl, CURLOPT_RETURNTRANSFER, True);
curl_setopt($crl, CURLOPT_FOLLOWLOCATION, True);
curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
#curl_setopt($crl, CURLOPT_SSL_VERIFYSTATUS, false);

echo $url . '<hr>';

$reply = curl_exec($crl);
if($reply === false){
    print_r('Curl error: ' . curl_error($crl));
}
else {
    $data = json_decode($reply, true);
    #var_dump($data);
    
    foreach($data as $key => $val){
        if(is_array($val)){
            foreach($val as $k => $v) {
                echo $k . ' -> ' . $v . '<br>';
            }
        }
        else {
            echo $key . ' -> ' . $val . '<br>';
        }
    }

    foreach($data['resolutions'] as $k => $v) {
      echo $k . ' -> ' . $v;
    }

}


curl_close($crl);
?>
<hr>
<a href='/../index.php'>HOME</a>

</body>
</html>

