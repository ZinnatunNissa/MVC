<?php 
    require_once'controllers/mdshippingController.php';
	$id = $_GET["id"];
	$shipping = getShipping($id);
	   
?>
<html> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
<body>
			 <style > body{
						background-color:rgb(223,223,242);
					}
					.my-font{
					font-size:25px;
					font-family:consolas;
					}
					.btn-mine{
					border:none;
					color:white;
					width:100%;
					background-color:black;
					border-radius:3px;
					padding:5px;
					margin-top:15px;
				}	
			</style>
	 <fieldset>
              <legend align="center"><h1>Update Shipping </h1></legend>
	    <div class="center">
	
	
	
	     <form class="form-horizontal form-material" action="" method="post">
	        <table align="center">
			<tr>
			    <td><input type="hidden" name="id" value="<?php echo $shipping["id"];?>"></td> 
			</tr>
			
		 <tr align="center ">
		       
		      
			 <th><span class="text"> First Name: </span></th>
			<td><input type="text" name="fname" value="<?php echo $shipping["fname"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center ">
			<th> <span class="text"> Last Name: </span> </th> 
			<td> <input type="text" name="lname" value="<?php echo $shipping["lname"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Phone: </span> </th> 
			<td> <input type="text" name="phone" value="<?php echo $shipping["phone"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Address: </span> </th> 
			<td> <input type="text" name="address" value="<?php echo $shipping["address"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Email: </span> </th> 
			<td> <input type="text" name="email" value="<?php echo $shipping["email"];?>" class ="form-control"></td>
		</tr>
		
		<tr>
			<td colspan="3"><input class="my-font btn-mine"  type="submit" name="edit_shipping" value="Update Shipping"></td>
		</tr>

	</table> 
	</form>
</div>
</fieldset>
</body>
</html>
		
		
		