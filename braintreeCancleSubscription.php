<?php

require_once("TestHelper.php");

try {

    $id = filter_var($_POST["subscriptionID"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $subscription = Braintree_Subscription::cancel($id);

    $response = array( 'status'=> 'Success', 'message'=>'Subscription got deleted.');
    
    header('Content-Type: application/json');
    echo json_encode($response);

}
catch (Braintree_Exception_NotFound $e) {
    echo $e;
}

?>