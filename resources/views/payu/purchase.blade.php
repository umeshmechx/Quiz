<?php
use Razzbee\PayUMoney\PayUMoney;

//require 'C:\wamp64\www\Ecom\backend\vendor\autoload.php';

$payumoney = new PayUMoney([
    'merchantId' => 'koYEiDcf',
    'secretKey'  => 'e8e9ojGDNTxUWRIBsKBt/m/JicyY9xGlbwZGG8JScgw=
SHARE WITH DEVELOPER',
    'salt'       =>  'X5gE17PVwc',
    'testMode'   => true
]);

// All of these parameters are required!
$params = [
    'txnid'       => '123',
    'amount'      => 10.50,
    'productinfo' => 'A book',
    'firstname'   => 'Peter',
    'email'       => 'umesh.mechx@gmail.com',
    'phone'       => '8147097014',
    'surl'        => 'http://localhost:8000/payumoney-php/return.php',
    'furl'        => 'http://localhost:8000/payumoney-php/return.php',
];

// Redirects to PayUMoney
$payumoney->initializePurchase($params)->send();