<?php 
	  require_once "controllers/mdorderController.php" ;
	   
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
	 <body>
		 <style > body{
					background-color:rgb(223,223,242);
				}
				.my-font{
				font-size:25px;
				font-family:consolas;
			    }
				.btn-mine{
				background-color:rgb(185,143,221);
				border:none;
				color:white;
				width:99%;
				border-radius:3px;
				padding:5px;
				margin-top:15px;
			}	
		</style>
		
		
	      <fieldset align = "center">
              <legend align="center"><h1> Order Below </h1></legend>
		       <form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		       <table align="center">
						
				 <tr>
						<th><span> Food Name</span></th>	    	
			        	<td><select id="name" name="name" class="form-control">
							        <option disabled selected>Choose Food Item</option>
							        <option id="f1">Chicken Fry</option> 
							        <option id="f2">Dosa</option>
								    <option id="f3">Baked Pasta</option>	
									<option id="f4">Pizza</option>
									<option id="f5">Noodles</option>
									<option id="f6">French Fry</option>
									<option id="f7">Kacchi</option>
									<option id="f8">Sushi</option>
									<option id="f9">Wedges</option>
									<option id="f10">Steaks</option>
									<option id="f11">Fried Rice</option>
									<option id="f12">Salmon Fish</option>
						</select>
						       <span id="err_name"><?php echo $err_name;?></span> </td></br>
					
						</tr> 
	               
					<tr>
							<th class="text">Food Quantity </th> 
							 <td> <input type="text" id="quantity" name="quantity" value="<?php echo $quantity;?>" class="form-control" placeholder="quantity"><br>
						    <span id="err_quantity"><?php echo $err_quantity;?></span> </td>
							   
						</tr>
			
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text" id="address" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Address" size="20"><br>
						<span  id="err_address"><?php echo $err_address;?></span></td>
					</tr>
					 
						
					<tr>
					    <th><span>Customer's Number</span></th>
						<td><input type="text" id="phone" name="phone"  class="form-control" value="<?php echo $phone;?>" placeholder="Number" size="20"><br>
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					 <tr>
					    <th><span>Email</span></th>
						<td><input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <td colspan="2"><input class="my-font btn-mine" type="submit" name="insert_order"value="Add Order"></td>
					 </tr>
			  </table>
		</form>
		
	</fieldset>
	 <script src ="jscontrollers/mdorderController.js"> </script>
   </body>
</html>