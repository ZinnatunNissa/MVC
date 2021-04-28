<?php 
		
		require_once "controllers/mdreservationController.php";
		$reservations=getUpdateReservation();
?>

<html>		
        <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<style>
		.center{
	margin: 0 auto;
    width:50% ;
	padding:20px;
	</style>

	</head>

	<div class="center">
	<h3 align="center"> Reservation List </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th> Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Time</th>
				<th>Previous Payment</th>
				<th> </th>
			</thead>
			<tbody>
				<?php
					
				foreach($reservations as $reservation){
					echo "<tr>";
					echo "<td>".$reservation["id"]."</td>";
					echo "<td>".$reservation["name"]."</td>";
					echo "<td>".$reservation["phone"]."</td>";
					echo "<td>".$reservation["address"]."</td>";
					echo "<td>".$reservation["time"]."</td>";
					echo "<td>".$reservation["prepay"]."</td>";
					echo '<td><a href="mdeditreservation.php?id='.$reservation["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a href="mddeletereservation.php?id='.$reservation["id"].'" class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </fieldset>
		   </html>


