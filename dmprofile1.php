<?php 
		
		require_once "dmControllers/dmprofileController.php" ;
		$profiles=getUpdateprofileinfo();
?>
<html> 

    <style>
		    body{
				background-color:rgb(223,223,242);
				
			}
			
	</style> 

	
  <div class="center">
	<h3 align="center"> Profile </h3>
	<table class="table table-striped">
			<thead>
				<th>name</th>
				<th>phone</th>
				<th>bnum</th>
				<th>city</th>
				<th>email</th
				<th> </th>
			</thead>
			<tbody>
			
				<?php
					
				foreach($profiles as $profileinfo){
					echo "<tr>";
					echo "<td>".$profileinfo["id"]."</td>";
					echo "<td>".$profileinfo["name"]."</td>";
					echo "<td>".$profileinfo["phone"]."</td>";
					echo "<td>".$profileinfo["bnum"]."</td>";
				    echo "<td>".$profileinfo["city"]."</td>";
					echo "<td>".$profileinfo["email"]."</td>";
					echo "</tr>";
				}
			?>
		   </tbody>
		   </table>
	</fieldset>
	</body>
	</html>