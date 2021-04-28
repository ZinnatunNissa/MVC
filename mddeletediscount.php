<?php
	require_once'controllers/mddiscountController.php';
	$id = $_GET["id"];
	$food = getDisc($id);
?>

<html>
      <head>
	  <title>Remove Employees</title>
	      <style>
		  .r-div
				{		
					border:1px solid black;
					margin:auto;
					width:30%;
					margin-top:13%;
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="r-div">
		 <fieldset>
        <legend align="center"><h2>Remove order</h2></legend>
				 
		 <form class="form-horizontal form-material" action="" method="post">
				
				<div align="center " class="form-group" align="center "> 
				      
					<td><input type="hidden" name="id" value="<?php echo $food["id"];?>"></td> 
				</div>		
				 <div align="center " class="form-group" align="center ">
					<h4 class="text">Food Name:</h4>
					<input type="text" name="name" value="<?php echo $food["name"];?>" placeholder="Food Name">
				</div>
				<div align="center" class="form-group text-center">
			
			<input type="submit" name="food_remove" value="Delete" class="btn" class="form-control">
		</div>
			</form>
			 <div>
		  </fieldset>
		 </body>
		 
</html>