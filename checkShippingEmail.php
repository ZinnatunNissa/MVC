<?php
	require_once 'controllers/mdshippingController.php';

	$email=$_GET["email"];
	$shipping = checkEmails($email);
	echo $shipping;

?>