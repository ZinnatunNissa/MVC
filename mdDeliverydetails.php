<?php 
		
		require_once "controllers/mddeliveryController.php";
		$details=getDeliveryDetails();
?>
<html> 
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<style>
					.center{
				margin: 0 auto;
				width:50% ;
				padding:20px;
		</style>
	
        <head>
  <div class="center">
	<h3 align="center"> Delivery Details </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Email</th>
				<th>Price</th>
				<th>Tax</th>
				<th>Total Price</th>
				<th> </th>
			</thead>
			<tbody>
				<?php
					
				foreach($details as $delivery){
					echo "<tr>";
					echo "<td>".$delivery["id"]."</td>";
					echo "<td>".$delivery["fname"]."</td>";
					echo "<td>".$delivery["lname"]."</td>";
					echo "<td>".$delivery["phone"]."</td>";
				    echo "<td>".$delivery["address"]."</td>";
					echo "<td>".$delivery["email"]."</td>";
					echo "<td>".$delivery["price"]."</td>";
					echo "<td>".$delivery["tax"]."</td>";
					echo "<td>".$delivery["tprice"]."</td>";
					echo "</tr>";
				}
			?>
		   </tbody>
		   </table>
	</fieldset>
	</body>
	</html>