<?php
		require_once'controllers/mddiscountController.php';
		$discounts=getUpdateDiscount();
?>


<html>		
        <head>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     </head>
	
		
		<style>
		.center{
	margin: 0 auto;
    width:50% ;
	padding:20px;
	</style>

	
	
	<div class="center">
	<h3 align="center"> Update Discount </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Food Name</th>
				<th>Previous Price</th>
				<th>Discount Price</th>
				<th></th>
			</thead>
			<tbody>
				<?php	
				foreach($discounts as $discount){
					echo "<tr>";
					echo "<td>".$discount["id"]."</td>";
					echo "<td>".$discount["name"]."</td>";
					echo "<td>".$discount["pprice"]."</td>";
					echo "<td>".$discount["dprice"]."</td>";					
					echo '<td><a href="mdadddiscount.php?id='.$discount["id"].'" class="btn btn-success">Edit</a></td>';
				    echo '<td><a href="mddeletediscount.php?id='.$discount["id"].'" class="btn btn-success">Delete</a></td>';
					//echo '<td>a href="adddiscount.php?id='.$discount["id"].'">Delete</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </fieldset>
		   </html>


