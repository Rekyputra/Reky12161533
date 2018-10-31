<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => '9980', 'description' => 'Yellow');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);
	