<?php 
	  require_once "controllers/mddiscountController.php" ;
	   
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
					border:none;
					color:white;
					width:100%;
					background-color:black;
					border-radius:3px;
					padding:5px;
					margin-top:15px;
				}	
			</style>

			<fieldset align = "center">
              <legend align="center"><h1> Add Discount</h1></legend>
			<form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
	           <table align = "center">
				 <tr>
						<th><span>Name</span></th>
						<td><input type="text"  id="name" name="name" onfocusout="checkUsername(this)" class="form-control" value="<?php echo $name;?>"  placeholder="Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					           <td><span><b>Food Price </b></span></td>
							   <td> <input type="text" id="pprice" class="form-control" name="pprice" value="<?php echo $pprice;?>" placeholder="Previous Price"> 
							    <span id="err_pprice"><?php echo $err_pprice;?></span> </td>
					
					</tr>
					
					<tr>
						<td><span><b> Discount Price</b></span></td>
						<td><input type="text" id="dprice" class="form-control" name="dprice" value="<?php echo $dprice;?>" placeholder="Discount Price"> 
						<span id="err_dprice"><?php echo $err_dprice;?></span> </td>
						
					</tr>
						
						 <tr>
							<td colspan="2"> <input type="submit" class="my-font btn-mine" name="add_discount" value="Add Discount"> </td>
						</tr>
				



				
		</table>
		
		</fieldset>
	</form>
        <script src ="jscontrollers/mddiscountController.js"> </script>
				
</div>

