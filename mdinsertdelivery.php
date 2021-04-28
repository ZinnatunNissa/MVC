<?php 
	  require_once "controllers/mddeliveryController.php" ;
	   
?>

<html>		
        <head>
		
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
		  <table align="center"  >
              <legend align="center"><h1>Manage Delivery</h1></legend>
		       <form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		      		 
					 <tr>
					    <th><span>First Name</span></th>
						<td><input type="text" id="fname" name="fname" class="form-control" value="<?php echo $fname;?>" placeholder="First Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
					</tr>	
					
					 <tr>
					    <th><span>Last Name</span></th>
						<td><input type="text"  id="lname" name="lname" class="form-control" value="<?php echo $lname;?>" placeholder="Last Name">
						<span id="err_lname" ><?php echo $err_lname;?></span></td>
					</tr>
							
					<tr>
					    <th><span>Phone</span></th>
						<td><input type="text" id="phone" name="phone") class="form-control" value="<?php echo $phone;?>" placeholder="Number" size="20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					
					<tr>
					    <th><span>Destination</span></th>
						<td><input type="text"  id="address" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Address"  size="20">
						<span id="err_address"><?php echo $err_address;?></span></td>
					</tr>
						
					 <tr>
					    <th><span>Email</span></th>
						<td><input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					 <tr>
					    <th><span>Price</span></th>
						<td><input type="text" id="price" name="price" class="form-control" value="<?php echo $email;?>" placeholder="Price">
						<span id="err_price"><?php echo $err_price;?></span></td>
					</tr>
					 
					 <tr>
					    <th><span>Tax</span></th>
						<td><input type="text" id="tax" name="tax" class="form-control" value="<?php echo $tax;?>" placeholder="Tax">
						<span id="err_tax"><?php echo $err_tax;?></span></td>
					</tr>
					 
					 <tr>
					    <th><span>Total Price</span></th>
						<td><input type="text" id="tprice" name="tprice" class="form-control" value="<?php echo $tprice;?>" placeholder="Total Price">
						<span id="err_tprice"><?php echo $err_tprice;?></span></td>
					</tr>
				
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="add_delivery" value=" Add Delivery"></td>
					</tr>

			  </table>
			  </form>
	</fieldset>
	
	<script src ="jscontrollers/mddeliveryController.js"> </script>
				
				
		
	
	</body>
	</html>