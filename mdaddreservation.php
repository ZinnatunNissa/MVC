<?php 
	  require_once "controllers/mdreservationController.php" ;
	   
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
              <legend align="center"><h1>Reservation</h1></legend>
		       <form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		       <table align="center">
			   
	
				   <tr>
						<th><span>Name</span></th>
						<td><input type="text"  id="name" name="name" onfocusout="checkUsername(this)" class="form-control" value="<?php echo $name;?>"  placeholder="Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Phone</span></th>
						<td><input type="text" id="phone" name="phone" onfocusout="checkPhoneNumber(this)"  class="form-control" value="<?php echo $phone;?>" placeholder="Number" size="20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					
			
					<tr>
					    <th><span>Address</span></th>
						<td><input type="text" id="address" name="address" onfocusout="checkAddress(this)"  class="form-control" value="<?php echo $address;?>" placeholder="Address" size="20">
						<span  id="err_address"><?php echo $err_address;?></span></td>
					</tr>
					<tr>
                        <th><span>Reservation Date</span></th> 
                        <td><select name="time"  class="form-control" value="<?php echo $time;?>">
						<option disabled selected>Month</option>
                        <?php
                        $month= array("January","February","March","April","May","June","July","August","September","October","November","December");
                        for($j=0;$j<count($month);$j++)
                        {
                            echo "<option>$month[$j]</option>";
                        }
                        ?>
                        </select>
						<span><?php echo $err_time;?></span>
						
                        <select name="time"  class="form-control" value="<?php echo $time;?>">
                         <option disabled selected>Day</option>
                        <?php
                             for($i=1;$i<=31;$i++){
                                 echo "<option>$i</option>";
                             }
                        ?>
                        </select>
						
						<span><?php echo $err_time;?></span>
                        </td>
                    </tr>
								   
						
					<tr>
					    <th><span>Pre Payment</span></th>
						<td><input type="text" id="prepay" name="prepay" class="form-control" value="<?php echo $prepay;?>" placeholder="Pre Payment">
						<span id="err_prepay"><?php echo $err_prepay;?></span></td>
					</tr>
					<tr>
					    <td colspan="2"><input class="my-font btn-mine" type="submit" name="add_reservation"value="Add Reservation"></td>
					 </tr>
			  </table>
		</form>
		
			<script>
			
</script>

	</fieldset>
	 <script src ="jscontrollers/mdreservationController.js"> </script>
   </body>
</html>