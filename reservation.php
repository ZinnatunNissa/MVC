<?php
     	require_once "controllers/reservationController.php" ;
?>
	 
		 
   
		     

<html>
     <head></head>
	 <body>
	 <style>
		    body{
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
				border-radius:5px;
				padding:8px;
				margin-top:15px;
			}	
	 </style> 
	      <fieldset align= "center">
              <legend align="center"><h1 id="font">Reservation</h1></legend>
		       <form action="" method="post" onsubmit="return validate()">
		       <table align="center" border="10" ,cellpadding="10", cellspacing="15">
			   
			        <tr>
					    <th><span>Name</span></th>
						<td><input type="text" name="name" id="name" placeholder="Name">
						<span id="err_name"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
					    <th><span>Email</span></th>
						<td>:<input type="text" id="email" name="email" >
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>



					<tr>
					    <th><span>Phone</span></th>
						<td>:<input type="text" id="phone" name="phone" placeholder="Number" size = "20">
						<span id="err_phone"><?php echo $err_phone;?></span></td>
					</tr>
					
            <tr>
                        <th><span>Date</span></th> 
						
                        <td>:<select id="day" name="day">
                        <option disabled selected>Day</option>
                        <?php
                             for($z=1;$z<=31;$z++){
                                 echo "<option>$z</option>";
                             }
                        ?>
						 </select>
                     <span id="err_day"><?php echo $err_day;?></span>
						
						
                        <select id="month" name="month">
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
						
						
						
                        <select id="year" name="year">
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
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="reservation" value="Reserve"></td>
						</tr>




			  </table>
		</form>
		</fieldset>
 <script src="jscontrollers/reservationController.js"></script>
	
		

	</body>
	</html>