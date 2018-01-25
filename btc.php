<?php
date_default_timezone_set("Asia/Bangkok");
"user=$user"
"pass=$password"
$c = curl_init("https://spacemining.io/sign-in");
    curl_setopt($c, CURLOPT_REFERER, "https://spacemining.io/sign-in");
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36");
    curl_setopt($c, CURLOPT_POSTFIELDS, $user, $password);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_ENCODING, 'gzip, deflate');
    //curl_setopt($c, CURLOPT_VERBOSE, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_COOKIEJAR, $cok);
    curl_setopt($c, CURLOPT_COOKIEFILE, $cok); 
    //curl_setopt($c, CURLOPT_COOKIEFILE, $cookie);
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    //$error = curl_strerror($c);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }


 $data= "Hello=$hero";
    
    $c = curl_init("https://www.spacemining.io/dashboard");
    curl_setopt($c, CURLOPT_REFERER, "https://www.spacemining.io/dashboard");
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36");
    curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_ENCODING, 'gzip, deflate');
    //curl_setopt($c, CURLOPT_VERBOSE, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_HEADER, true);
    curl_setopt($c, CURLOPT_COOKIEJAR, $cok);
    curl_setopt($c, CURLOPT_COOKIEFILE, $cok); 
    $response = curl_exec($c);
    $httpcode = curl_getinfo($c);
    //$error = curl_strerror($c);
    if (!$httpcode)
        return false;
    else {

$header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
    }

preg_match_all('~(<h2 style="color:#CE224D"><b>(.*?)</h2>)~', $body, $a-bal);
    preg_match_all("~(</h3> <p align='left'>(.*?)</p>)~", $body, $user-balance);
    
    //print_r($a-bal).print_r($user-balance);
    $hero = $hero[2][0];
    $a-bal = $a-bal[2][0];
    $user-balance = $user-balance[2][1];
    //echo $body;
    $res['info'] = "Hello: $hero".PHP_EOL."$a-bal".PHP_EOL."$user-balance";

echo "[" . date("H:i:s") . "] Tinggal tidur bro...\n";
   
}