<?php
  require_once('./config.php');

  //$token  = $_POST['stripeToken'];

  try {

  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'source'  => $_POST['stripeToken'],
      'plan' => 'rmp_monthly'
  ));

    header('Location: http://dashboard.remembermypeople.com');
    exit;
  } 

  catch (Exception $e) {

      header('Location:oops.html');
      error_log("unable to sign up customer" . $_POST['stripeEmail']. ", error" . $e->getMessage());
}





/* var_dump($customer);
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1299,
      'currency' => 'usd'
  ));
  echo '<h1>Successfully payed!</h1>';
*/






















