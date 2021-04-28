<?php
     	require_once "dmControllers/dmprofileController.php" ;
?>
	 
<html>
     <head>
	  <style>
		    body{
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
	 </head>
	 <body>
	      <fieldset align = "center">
              <legend align="center"><h1 id="font">Add Profile</h1></legend>
		       <form action="" method="post" onsubmit="return validate()">
		       <table align="center">
			        
					 <tr>
					    <th><span>Name</span></th>
						<td><input type="text" id="name" name="name" placeholder="Name">
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
						
						
					</tr>
					
					<tr>
					    <th><span>Email</span></th>
						<td>:<input type="text" id="email" name="email"placeholder="Email" >
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					
					<tr>
						<td colspan="2"><input class="my-font btn-mine" type="submit" name="profiled" value="Submit"></td>
					</tr>
			  </table>
		</form>
		
		<script src="dmjscontrollers/dmprofileController.js"></script>
		
		
		
	</fieldset>
	</body>
	
	</html> 