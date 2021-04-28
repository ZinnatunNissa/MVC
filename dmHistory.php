<?php 
		
		require_once "dmControllers/dmshippingController.php" ;
		$shippings=getUpdateShipping1();
?>
<html> 

    <style>
		    body{
				background-color:rgb(223,223,242);
				
			}
			
	</style> 

	
  <div class="center">
	<h3 align="center"> All History </h3>
	<table class="table table-striped">
			<thead>
				<th>Serial</th>
				<th>number</th>
				<th>name</th>
				<th>address</th>
				<th>price</th
				<th> </th>
			</thead>
			<tbody>
			
				<?php
					
				foreach($shippings as $shipping1){
					echo "<tr>";
					echo "<td>".$shipping1["id"]."</td>";
					echo "<td>".$shipping1["number"]."</td>";
					echo "<td>".$shipping1["name"]."</td>";
					echo "<td>".$shipping1["address"]."</td>";
				    echo "<td>".$shipping1["price"]."</td>";
					//echo '<td><a href="addmenu.php?id='.$menuu["id"].'"> Edit</a></td>';
					echo '<td><a href="dmVerified.php?id='.$shipping1["id"].'" class="btn btn-success">Verify</a></td>';
					echo '<td><a href="dmDenied.php?id='.$shipping1["id"].'" class="btn btn-success">Deny</a></td>';
					echo "</tr>";
				}
			?>
		   </tbody>
		   </table>
		   <a href="dmDeliverymanhome.php" class="btn btn-success">Go back</a>
	</fieldset>
	</body>
	</html>