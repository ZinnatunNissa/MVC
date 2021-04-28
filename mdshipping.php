<?php 
		
		require_once "controllers/mdshippingController.php";
		$shippings=getUpdateShipping();
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
	<h3 align="center"> Shipping Details </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Email</th>
				<th> </th>
			</thead>
			<tbody>
			
				<?php
					
				foreach($shippings as $shipping){
					echo "<tr>";
					echo "<td>".$shipping["id"]."</td>";
					echo "<td>".$shipping["fname"]."</td>";
					echo "<td>".$shipping["lname"]."</td>";
					echo "<td>".$shipping["phone"]."</td>";
				    echo "<td>".$shipping["address"]."</td>";
					echo "<td>".$shipping["email"]."</td>";
					//echo '<td><a href="addmenu.php?id='.$menuu["id"].'"> Edit</a></td>';
					echo '<td><a href="mdaddshipping.php?id='.$shipping["id"].'" class="btn btn-success">Update</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </table>
	</fieldset>
	</body>
	</html>