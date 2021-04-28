<?php
	require_once 'controllers/mdloginController.php';

	$username=$_GET["username"];
	$signuser = checkUsernamee($username);
	echo $signuser;
	?>