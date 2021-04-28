<?php
     	require_once "controllers/deliveryinfoController.php" ;
?>
<html>
     <head></head>
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
					background-color:rgb(185,143,221);
					border-radius:3px;
					padding:5px;
					margin-top:15px;
				}	
			</style>
	      <fieldset>
              <legend align="center"><h1>Customer Delivery Information</h1></legend>
		       <form action="" method="post" onsubmit="return validate()">
			   
			    <table align="center", border ="5" cellpadding="50", cellspacing="5">
				
				
				
			         <tr>
					    <th><span>Customer Name</span></th>
						<td><input type="text" id="name" name="name"value="<?php echo $name;?>" placeholder="Customer Name">
						<span id="err_name"> <?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Phone</span></th>
						<td><input type="text" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Number" size="20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
					 
					
					<tr>
					    <th><span>Address</span></th>
						
						<td><input type="text" id="bnum" name="bnum" placeholder="Building Number" size="20">
						<span id="err_bnum"><?php echo $err_bnum;?></span>
						
						
					    <input type="text" id="city" name="city" placeholder="City" size="20">
						<span id="err_city"><?php echo $err_city;?></span><br>
						
						
					    <input type="text" id="pcode" name="pcode" placeholder="Zip Code" size="20">
						<span id="err_pcode"><?php echo $err_pcode;?></span></td>
					</tr>
					
			         <tr>
					    <th><span>Extra Requirement</span></th>
						<td>
						<input type="checkbox"  id="extra" name="extra" >Sauce 
						<input type="checkbox"  id="extra" name="extra" >Naga
						
						
						
					
						<span id="err_extra"> <?php echo $err_extra;?></span></td>
					</tr>
					
					<tr>
                        <th><span>Date</span></th>
                        <td><select name="day" id="day">
                        <option disabled selected>Day</option>
                        <?php
                             for($i=1;$i<=31;$i++){
                                 echo "<option>$i</option>";
                             }
                        ?>
                        </select>
						<span id="err_day"><?php echo $err_day;?></span>
						
						
						
                        <select name="month" id="month">
                        <option disabled selected>Month</option>
                        <?php
                        $month= array("January","February","March","April","May","June","July","August","September","October","November","December");
                        for($j=0;$j<count($month);$j++)
                        {
                            echo "<option>$month[$j]</option>";
                        }
                        ?>
                        </select>
						<span id="err_month"><?php echo $err_month;?></span>
						
						
						
						
                        <select name="year" id="year">
                        <option disabled selected>Year</option>
                        <?php
                             for($k=2021;$k<=2030;$k++){
                                 echo "<option>$k</option>";
                             }
                        ?>
                        </select>
					
						<span id="err_year"><?php echo $err_year;?></span>
                        </td>
                    </tr>
					<tr>
					
					
					
					
					<tr>
					    <th><span>Time</span></th>
					    <td> : <select id="hour" name="hour">
						<option disabled selected>Hour</option>
						<?php
						     for($n=1;$n<=24;$n++){
								 echo "<option>$n</option>";
							 }
						?> 
					  
						</select>
						<span id="err_hour"> <?php echo $err_hour; ?></span>
						
                    
						

					    <select id="min" name="min">
						<option disabled selected>Minute</option>
						<?php
						     for($c=0;$c<=60;$c++){
								 echo "<option>$c</option>";
							 }
						?> 
					    </select>
						<span id="err_min"> <?php echo $err_min; ?></span>
						</td>
					
					
					
					
					
					<tr>
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="delivered" value="Insert"></td>
					</tr>

			  </table>
		</form>
	
	</fieldset>
	<script src="jscontrollers/deliveryCustomerController.js"></script>


	
	</body>
	</html>