<?php 
    require_once'controllers/mddiscountController.php';
	$id = $_GET["id"];
	$food = getDisc($id);
	   
?>
<html> 

<body>
	
	<div class="center">
	
	
	
	<form class="form-horizontal form-material" action="" method="post">
	    
			       
		
		<div align="center " class="form-group" align="center "> 
			<td><input type="hidden" name="id" value="<?php echo $food["id"];?>"></td> 
		</div>		
		
	     <div align="center " class="form-group" align="center ">
			<h4 class="text">Food:</h4> 
			<input type="text" name="name" value="<?php echo $food["name"];?>" class ="form-control">
		</div>
		<div align="center " class="form-group" align="center ">
			<h4 class="text">Previous Price:</h4> 
			<input type="text" name="pprice" value="<?php echo $food["pprice"];?>" class ="form-control">
		</div>
		<div align="center " class="form-group" align="center ">
			<h4 class="text">Discount Price:</h4> 
			<input type="text" name="dprice" value="<?php echo $food["dprice"];?>" class ="form-control">
		</div>
		<div align="center" class="form-group text-center">
			
			<input type="submit" name="update_discount" value="Update" class="btn" class="form-control">
		</div>
	</form>
</div>
</body>
</html>