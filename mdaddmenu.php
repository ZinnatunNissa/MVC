<?php 
    require_once'controllers/mdmenuController.php';
	$id = $_GET["id"];
	$foodmenu = getMenu($id);
	   
?>
<html> 
			
        <head>
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
              <legend align="center"><h1>Edit Menu </h1></legend>
	    <div class="center">
	
	
	
	     <form class="form-horizontal form-material" action="" method="post">
	        <table align="center">
			<tr>
			    <td><input type="hidden" name="id" value="<?php echo $foodmenu["id"];?>"></td> 
			</tr>
			
		 <tr align="center ">
		       
		      
			 <th><span class="text"> Food Name: </span></th>
			<td><input type="text" name="name" value="<?php echo $foodmenu["name"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center ">
			<th> <span class="text"> Food Price: </span> </th> 
			<td> <input type="text" name="price" value="<?php echo $foodmenu["price"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Food Catagory: </span> </th> 
			<td> <input type="text" name="catagory_id" value="<?php echo $foodmenu["catagory_id"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Food Quantity: </span> </th> 
			<td> <input type="text" name="quantity" value="<?php echo $foodmenu["quantity"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Added By: </span> </th> 
			<td> <input type="text" name="addedby" value="<?php echo $foodmenu["addedby"];?>" class ="form-control"></td>
		</tr>
		
		<tr>
			<td colspan="3"><input class="my-font btn-mine"  type="submit" name="edit_menu" value="Update"></td>
		</tr>

	</table> 
	</form>
</div>
</fieldset>
</body>
</html>
		