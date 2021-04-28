<?php 
	  require_once "dmControllers/dmshippingController.php" ;
	   
?>

<html>
     <style>
		    body{
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
	 
      <body>
	      <fieldset>
		  <table align="center"  >
              <legend align="center"><h1>Shipping Info</h1></legend>
		       <form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		      		 
					 <tr>
					    <th><span>Order number</span></th>
						<td><input type="text" id="number" name="number" class="form-control" value="<?php echo $number;?>" placeholder="Order number">
						<span id="err_number"><?php echo $err_number;?></span></td>
					</tr>	
					
					 <tr>
					    <th><span>Customer Name</span></th>
						<td><input type="text"  id="name" name="name" class="form-control" value="<?php echo $name;?>" placeholder="Name">
						<span id="err_name" ><?php echo $err_name;?></span></td>
					</tr>
							
					
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text"  id="address" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Address"  size="20">
						<span id="err_address"><?php echo $err_address;?></span></td>
					</tr>
						
					 <tr>
					    <th><span>Price</span></th>
						<td><input type="text" id="price" name="price" class="form-control" value="<?php echo $price;?>" placeholder="Price">
						<span id="err_price"><?php echo $err_price;?></span></td>
					</tr>
					 
					
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="add_shipping" value="ADD Shipping"></td>
					</tr>

			  </table>
			  </form>
	</fieldset>
	
		<script>
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("number").value == ""){
						get("err_number").innerHTML="Number Required";
						get("err_number").style.color="blue";
						hasError=true;
					}
					if(get("name").value == ""){
						get("err_name").innerHTML="Name Required";
						get("err_name").style.color="red";
						hasError=true;
					}
					
					if(get("address").value == ""){
						get("err_address").innerHTML="Address Required";
						get("err_address").style.color="green";
						hasError=true;
					}
					if(get("price").value == ""){
						get("err_price").innerHTML="Price Required";
						get("err_price").style.color="orange";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_number").innerHTML="";
					get("err_name").innerHTML="";
					get("err_address").innerHTML="";
					get("err_price").innerHTML="";
				}
				
</script>
		
		
	
	</fieldset>
</html>
