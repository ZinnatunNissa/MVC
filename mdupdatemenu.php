<?php 
		require_once'controllers/mdmenuController.php';
		$menulists=getUpdateMenuList();
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
	<h3 align="center"> Update Menu </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>Name</th>
				<th>Price</th>
				<th>Catagory</th>
				<th>Quantity</th>
				<th>Added_by</th>
				<th> </th>
			</thead>
			<tbody>
			
				<?php	
				foreach($menulists as $menuu){
					echo "<tr>";
					echo "<td>".$menuu["id"]."</td>";
					echo "<td>".$menuu["name"]."</td>";
					echo "<td>".$menuu["price"]."</td>";
					echo "<td>".$menuu["catagory_id"]."</td>";
				    echo "<td>".$menuu["quantity"]."</td>";
					echo "<td>".$menuu["addedby"]."</td>";
					//echo '<td><a href="adddiscount.php?id='.$discount["id"].'">Edit</a></td>';
					echo '<td><a href="mdaddmenu.php?id='.$menuu["id"].'"> Edit</a></td>';
					echo '<td><a href="mddeletemenu.php?id='.$menuu["id"].'">Delete</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </fieldset>
		   </html>


