<?php
$number = 10002;

$username_length = 9;
function Ngacak($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $concatnya = $randomString . "@" . "gmail.com";
    return $concatnya;
}

function ngacakuname($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    $randomString2 = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        $randomString2 .= $characters[rand(0, $charactersLength - 1)];
    }
    $concatnya = $randomString . " " . $randomString2;
    return $concatnya;
}


for ($i = 0; $i <= 10; $i++) {
    $email_addresss = Ngacak(10);
    $usernamenya = ngacakuname(8);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://traxto.com/v1/user');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"email\":\"$email_addresss\",\"password\":\"bejobintang222222222\",\"name\":\"$usernamenya\",\"referralCode\":\"UeI0Ozzgl\"}");
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Access-Control-Allow-Origin: *';
    $headers[] = 'Accept: application/json, text/javascript, /; q=0.01';
    $headers[] = 'Authorization: ';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36';
    $headers[] = 'Content-Type: application/json; charset=UTF-8';
    $headers[] = 'Origin: https://traxto.com';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Sec-Fetch-Dest: empty';
    $headers[] = 'Referer: https://traxto.com/signup-light.html?id=UeI0Ozzgl';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    echo $result;
    sleep(2);
}
?>