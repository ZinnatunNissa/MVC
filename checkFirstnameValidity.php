<?php
	require_once 'controllers/mdshippingController.php';

	$fname=$_GET["fname"];
	$shipping = checkUsernamee($fname);
	echo $shipping;

?>