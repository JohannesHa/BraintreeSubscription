<?php

require_once("TestHelper.php");

$customer = Braintree_Customer::create([
  'email' => filter_var($_POST["email"], FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH)
]);

if ($customer->success) {

$token .= $customer->customer->id . 'monatabo'; 

  $paymentMethod = Braintree_PaymentMethod::create([
    'customerId' => $customer->customer->id,
    'paymentMethodNonce' => filter_var($_POST["payment_method_nonce"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
    'token' => $token
  ]);

  if ($paymentMethod->success) {
    
    $result = Braintree_Subscription::create([
      'paymentMethodToken' => $token,
      'planId' => 'YOUR_SUBSCRIPTION_NAME'
    ]);

    if ($result->success) {

        $response = array( 'status'=> 'Success', 'message'=>$result->subscription->id );
    }
    else{
       $response = array( 'status'=> 'Failure', 'message'=>'Something went wrong.' );
    }
  }

  else{
      $response = array( 'status'=> 'Failure', 'message'=>'Something went wrong.' );
  }
}
else{

    $response = array( 'status'=> 'Failure', 'message'=>'Something went wrong.' );
}
 
header('Content-Type: application/json');
echo json_encode($response);

?>