<?php
	require_once 'controllers/mdshippingController.php';

	$phone=$_GET["phone"];
	$shipping = checkNumber($phone);
	echo $shipping;

?>