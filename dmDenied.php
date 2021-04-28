<?php 
    require_once 'dmControllers/dmshippingController.php';
	$id = $_GET["id"];
	$shippings = getShipping1($id);
	   
?>
<html>

    <style>
		    body{
				background-color:rgb(223,223,242);
				
			}
	</style> 
			
 
	 <fieldset>
              <legend align="center"><h1>Denied Shipping</h1></legend>
	    <div class="center">
	
	
	
	     <form class="form-horizontal form-material" action="" method="post">
	        <table align="center">
			<tr>
			    <td><input type="hidden" name="id" value="<?php echo $shippings["id"];?>"></td> 
			</tr>
			
		 <tr align="center ">
			 <th><span class="text"> Order number: </span></th>
			<td><input type="text" name="number" value="<?php echo $shippings["number"];?>"></td>
		</tr>
		
		<tr align="center ">
			<th> <span class="text">Customer Name: </span> </th>
			<td> <input type="text" name="name" value="<?php echo $shippings["name"];?>" placeholder="Name"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Shipping Address </span> </th> 
			<td> <input type="text" name="address" value="<?php echo $shippings["address"];?>"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Price </span> </th> 
			<td> <input type="text" name="price" value="<?php echo $shippings["price"];?>"></td>
		</tr>
		
		<tr>
			<td colspan="3"><input type="submit" name="delete_shipping" value="Delete"></td>
		</tr>

	</table> 
	</form>
</div>
</fieldset>
</body>
</html>
		