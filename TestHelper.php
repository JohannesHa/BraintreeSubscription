<?php
session_start();
require_once("vendor/autoload.php");


Braintree\Configuration::environment('sandbox');
Braintree\Configuration::merchantId('YOUR_MERCHANT_ID');
Braintree\Configuration::publicKey('YOUR_PUBLIC_KEY');
Braintree\Configuration::privateKey('YOUR_PRIVATE_KEY');
