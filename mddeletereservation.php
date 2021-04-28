<?php 
    require_once'controllers/mdreservationController.php';
	$id = $_GET["id"];
	$reserve = getReservation($id);
	   
?>
<html> 

		<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
              <legend align="center"><h1> Delete Reservation </h1></legend>
	    <div class="center">
	
	
	
	     <form class="form-horizontal form-material" action="" method="post">
	        <table align="center">
			<tr>
			    <td><input type="hidden" name="id" value="<?php echo $reserve["id"];?>"></td> 
			</tr>
			
		 <tr align="center ">
		       
		      
			 <th><span class="text"> Client Name: </span></th>
			<td><input type="text" name="name" value="<?php echo $reserve["name"];?>" class ="form-control"></td>
		</tr>
		
		
		<tr align="center">
			<th> <span class="text" > Phone: </span> </th> 
			<td> <input type="text" name="phone" value="<?php echo $reserve["phone"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Address: </span> </th> 
			<td> <input type="text" name="address" value="<?php echo $reserve["address"];?>" class ="form-control"></td>
		</tr>
		<tr align="center ">
			<th> <span class="text"> Time : </span> </th> 
			<td> <input type="text" name="time" value="<?php echo $reserve["time"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<th> <span class="text" > Previous Payment : </span> </th> 
			<td> <input type="text" name="prepay" value="<?php echo $reserve["prepay"];?>" class ="form-control"></td>
		</tr>
		
		<tr align="center">
			<td colspan="3"><input class="btn btn-success"  type="submit" name="delete_reservation" value=" Delete Reservation"></td>
		</tr>

	</table> 
	</form>
</div>
</fieldset>
</body>
</html>