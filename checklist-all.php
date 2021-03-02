<?php
function checklist_all_api($url, $a) {
    $authorization_token = "Authorization: Bearer ".$a;

    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        $authorization_token
    //    'Content-Length: ' . strlen($payload))
    ));

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}
session_start();
$call = checklist_all_api('http://18.139.50.74:8080/checklist', $_SESSION['token']);
$call_decode = json_decode($call, TRUE);

echo count($call_decode);
echo $call_decode['data'][2]['id'];
?>