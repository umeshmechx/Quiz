<?php
// return.php

use Razzbee\PayUMoney\PayUMoney;

require 'vendor/autoload.php';

$payumoney = new PayUMoney([
    'merchantId' => 'YOUR_MERCHANT_ID',
    'secretKey'  => 'YOUR_SECRET_KEY',
    'salt'       =>  'YOUR_SALT',
    'testMode'   => true
]);

$result = $payumoney->completePurchase($_POST);

if ($result->checksumIsValid() && $result->getStatus() === PayUMoney::STATUS_COMPLETED) {
  print 'Payment was successful.';
} else {
  print 'Payment was not successful.';
}