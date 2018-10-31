<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => '9980');
$result = $myStripe->delproduct($data);
echo "<pre>"; print_r($result);
?>