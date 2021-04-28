<?php
	require_once 'controllers/mdreservationController.php';

	$phone=$_GET["phone"];
	$reserve = checkNumber($phone);
	echo $reserve;

?>