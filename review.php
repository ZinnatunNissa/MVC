<?php
     	require_once "controllers/reviewController.php" ;
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
              <legend align="center"><h1 id="font">Review Section</h1></legend>
		       <form action="" method="post" onsubmit="return validate()">
		       <table align="center">
			        
					 <tr>
					    <th><span>Customer Name</span></th>
						<td><input type="text" id="name"  name="name"value="<?php echo $name;?>" placeholder="Customer Name">
						<span id="err_name"> <?php echo $err_name;?></span></td>
					</tr>
					
					
					<tr>
                        <th><span> Review </span></th>
                        <td><input type="text" id="review" name="review" value="<?php echo $review;?>" placeholder="review please" >
                        <span id="err_review"><?php echo $err_review;?></span></td>
                    </tr>
					
					<tr>
						<td colspan="2"><input class="my-font btn-mine" type="submit" name="reviewed" value="Submit"></td>
					</tr>
			  </table>
		</form>
		
		<script src="jscontrollers/reviewController.js"></script>
		
		
		
	</fieldset>
	</body>
	
	</html> 