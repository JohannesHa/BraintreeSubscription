<?php
require_once("TestHelper.php");

echo($clientToken = Braintree\ClientToken::generate());

?>