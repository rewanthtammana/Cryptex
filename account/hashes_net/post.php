<?php

$url = 'http://www.whatsmyip.org/hash-generator/hash.php';

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);?>
