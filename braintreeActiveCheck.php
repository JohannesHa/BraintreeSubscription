<?php

require_once("TestHelper.php");

try {

    $id = filter_var($_POST["subscriptionID"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    $subscription = Braintree_Subscription::find($id);

    error_log($subscription->status, 0);

    if ($subscription->status == 'Active') {
        
        $response = array( 'status'=> 'Success', 'message'=>'Subscription is active.');
    }
    else{
        $response = array( 'status'=> 'Failure', 'message'=>$subscription->status );
    }

    header('Content-Type: application/json');
    echo json_encode($response);

}
catch (Exception $e)
{
     echo json_encode($e);
}

?>