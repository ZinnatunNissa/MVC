<?php 
	  require_once "controllers/showshippingController.php" ;
	   
?>

<html>		
        <head>
		
		
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
              <legend align="center"><h1>Customer Shipping</h1></legend>
		       <form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		      		 
					 <tr>
					    <th><span>First Name</span></th>
						<td><input type="text" id="fname" name="fname" onfocusout="checkUsername(this)" class="form-control" value="<?php echo $fname;?>" placeholder="First Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
					</tr>	
					
					 <tr>
					    <th><span>Last Name</span></th>
						<td><input type="text"  id="lname" name="lname" class="form-control" value="<?php echo $lname;?>" placeholder="Last Name">
						<span id="err_lname" ><?php echo $err_lname;?></span></td>
					</tr>
							
					<tr>
					    <th><span>Phone</span></th>
						<td><input type="text" id="phone" name="phone" onfocusout="checkPhoneNumber(this)" class="form-control" value="<?php echo $phone;?>" placeholder="Number" size="20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text"  id="address" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Address"  size="20">
						<span id="err_address"><?php echo $err_address;?></span></td>
					</tr>
						
					 <tr>
					    <th><span>Email</span></th>
						<td><input type="text" id="email" name="email" onfocusout="checkEmail(this)" class="form-control" value="<?php echo $email;?>" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					 
					
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="add_shipping" value="ADD Shipping"></td>
					</tr>

			  </table>
			  </form>
	</fieldset>
	<script src="jscontrollers/shippingController.js"></script>
	
				
				
		
	
	</body>
	</html>