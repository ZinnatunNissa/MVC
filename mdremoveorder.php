<?php 
    require_once'controllers/mdorderController.php';
	$id = $_GET["id"];
	$orderss = getOrdermenu($id);
	   
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
		       <form action="" method="post" class="form-horizontal form-material">
		       <table align="center">
						<tr>
			    <td><input type="hidden" name="id" value="<?php echo $orderss["id"];?>"></td> 
			</tr>
				 <tr>
						<th><span> Food Name</span></th>	    	
			        	<td><select id="name" name="name" class="form-control">
							        <option disabled selected>Choose Food Item</option>
							        <option id="">Chicken Fry</option> 
							        <option id="">Dosa</option>
								    <option id="">Baked Pasta</option>	
									<option id="">Pizza</option>
									<option id="">Noodles</option>
									<option id="">French Fry</option>
									<option id="">Kacchi</option>
									<option id="">Sushi</option>
									<option id="">Wedges</option>
									<option id="">Steaks</option>
									<option id="">Fried Rice</option>
									<option id="">Salmon Fish</option>
						</select>
						       <span id="err_name" value="<?php echo $orderss["name"];?>"> </span> </td></br>
					<?php echo $err_name;?>
						</tr> 
	               
					<tr>
							<th class="text">Food Quantity </th> 
							 <td> <input type="text" id="quantity" name="quantity" value="<?php echo $orderss["quantity"];?>" class="form-control" placeholder="quantity"><br>
						    <span id="err_quantity"><?php echo $err_quantity;?></span> </td>
							   
						</tr>
			
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text" id="address" name="address" class="form-control" value="<?php echo $orderss["address"];?>" placeholder="Address" size="20"><br>
						<span  id="err_address"><?php echo $err_address;?></span></td>
					</tr>
					 
						
					<tr>
					    <th><span>Customer's Number</span></th>
						<td><input type="text" id="phone" name="phone"  class="form-control" value="<?php echo $orderss["phone"];?>" placeholder="Number" size="20"><br>
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					 <tr>
					    <th><span>Email</span></th>
						<td><input type="text" id="email" name="email" class="form-control" value="<?php echo $orderss["email"];?>" placeholder="Email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					<tr>
					    <td colspan="2"><input class="my-font btn-mine" type="submit" name="cancel_order"value="Cancel Order"></td>
					 </tr>
			  </table>
		</form>
		
	</fieldset>
   </body>
</html>