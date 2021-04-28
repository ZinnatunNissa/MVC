<?php
	require_once 'controllers/mdreservationController.php';

	$address=$_GET["address"];
	$reserve = checkAddres($address);
	echo $reserve;

?>