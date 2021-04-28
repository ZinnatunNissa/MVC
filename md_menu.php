<?php
	  require_once "controllers/mdmenuController.php" ;   
?>
<html> <head> 
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
						background-color:rgb(185,143,221);
						border-radius:3px;
						padding:5px;
						margin-top:15px;
						}
			</style>
			<div>
			<fieldset>
			
              <legend align="center"><h1> Insert Food Menu</h1></legend>
			<form action="" method="post" onsubmit="return validate()">
	
	
					<div class="form-group" align="center"> 
		
					   <h4 class="text"> Food Name:</h4>  
						<input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="name"><br>
						    <span id="err_name"><?php echo $err_name;?></span>
					<div>
		
					<div class="form-group" align="center">
					
					           <h4 class="text"> Price:</h4>
							   
							   <input type="text" id="price" name="price" value="<?php echo $price;?>" placeholder="price"><br>
						    <span id="err_price"><?php echo $err_price;?></span>
							  
					
					</div>
					<div class="form-group" align="center"> 
				    	<h4 class="text"> Catagory :</h4>
			        	<select name="catagory_id">
							        <option disabled selected>Choose Catagory</option>
							        <option id="cat1">Lunch</option> 
							        <option id="cat2">Dinner</option>
								    <option id="cat3">Snacks</option>	  
						</select>
						       <span id="err_catagory_id"><?php echo $err_catagory_id;?></span>
					
						</div>
						<div class="form-group" align="center">
							<h4 class="text">Food Quantity:</h4> 
							
						
							 <input type="text" id="quantity" name="quantity" value="<?php echo $quantity;?>" placeholder="quantity"><br>
						    <span id="err_quantity"><?php echo $err_quantity;?></span>
							   
						</div>
						
						      
		
						<div class="form-group" align="center">
							<h4 class="text">Added By:</h4> 
							<input type="text" id="addedby" name="addedby" value="<?php echo $addedby;?>" placeholder="addedby"><br>
						    <span id="err_addedby"><?php echo $err_addedby;?></span>
						</div> </br>
		
						<div class="form-group text-center" align="center">
							
							<input type="submit" class="btn btn-success" name="add_menu" value="Insert Menu" class="form-control">
						</div>
				</fieldset>
         	</form>
	<script src ="jscontrollers/mdmenuController.js"> </script>
	</fieldset>
</div>















