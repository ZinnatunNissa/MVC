<?php
	require_once 'controllers/mdreservationController.php';

	$name=$_GET["name"];
	$res = checkUsernamee($name);
	echo $res;

?>