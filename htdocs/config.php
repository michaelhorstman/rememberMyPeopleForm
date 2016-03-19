<?php
require_once('../vendor/autoload.php');
$stripe = array(
  secret_key      => 'sk_test_uKIhXlw3D41QFEUsDkyxRut9',
  publishable_key => 'pk_test_v9njWOjXTcYhsUHxzE2whwqp'
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>