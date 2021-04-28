<?php 
		
		require_once "controllers/mdorderController.php";
		$orders=getInsertOrdermenu();
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
	<h3 align="center"> Order Details </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th> Food Name</th>
				<th> Food Quantity</th>
				<th>Customer's Address</th>
				<th>Customer's Number</th>
				<th>Email</th>
				<th> </th>
			</thead>
			<tbody>
			
				<?php
				foreach($orders as $ordermenu){
					echo "<tr>";
					echo "<td>".$ordermenu["id"]."</td>";
					echo "<td>".$ordermenu["name"]."</td>";
					echo "<td>".$ordermenu["quantity"]."</td>";
					echo "<td>".$ordermenu["address"]."</td>";
				    echo "<td>".$ordermenu["phone"]."</td>";
					echo "<td>".$ordermenu["email"]."</td>";
					//echo '<td><a href="addmenu.php?id='.$menuu["id"].'"> Edit</a></td>';
					echo '<td><a href="mdremoveorder.php?id='.$ordermenu["id"].'" class="btn btn-success">Cancel</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </table>
	</fieldset>
	</body>
	</html>