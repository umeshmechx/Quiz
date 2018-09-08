<?php
// return.php

use Razzbee\PayUMoney\PayUMoney;

//require 'vendor/autoload.php';

$payumoney = new PayUMoney([
    'merchantId' => 'koYEiDcf',
    'secretKey'  => 'e8e9ojGDNTxUWRIBsKBt/m/JicyY9xGlbwZGG8JScgw=',
    'salt'       =>  'X5gE17PVwc',
    'testMode'   => true
]);

$result = $payumoney->completePurchase($_POST);

if ($result->checksumIsValid() && $result->getStatus() === PayUMoney::STATUS_COMPLETED) {
  print 'Payment was successful.';
} else {
  print 'Payment was not successful.';
}