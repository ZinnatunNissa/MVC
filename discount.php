<?php
 $discount="";
     $err_discount="";
     $coupon="";
     $err_coupon="";
	 
   
	 
	
	
     $puser="";
     $err_puser="";  
	 
	
		
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
		    if(empty($_POST["discount"])){
				 $err_discount="Discount Type Required";
			 }
			  elseif(!is_numeric($_POST["coupon"])){
			     $err_coupon="[Coupon Amount should contain Numeric values only]";
		     }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["discount"]);
		     }
			 else{
				 $discount=$_POST["discount"];
			 }
					
					
			 if(empty($_POST["coupon"])){
				 $err_coupon="Insert Coupon Amount";
			 }
			 elseif(!is_numeric($_POST["coupon"])){
			     $err_coupon="[Coupon Amount should contain Numeric values only]";
		     }
			 else{
				 $coupon=$_POST["coupon"];
			 }
		 
		  if(empty($_POST["puser"])){
				 $err_puser="Insert usage limit per user";
			 }
			 elseif(!is_numeric($_POST["puser"])){
			     $err_puser="[usage limit per user should contain Numeric values only]";
		     }
			 else{
				 $puser=$_POST["puser"];
			 }
		 if(empty($_POST["date"])){
                 $err_date="Date Required";
             }
             else{
                 $date=$_POST["date"];
             }
		
       
	   
	   
	   
     }
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
                    border:none;
                    color:white;
                    width:100%;
                    background-color:rgb(185,143,221);
                    border-radius:3px;
                    padding:5px;
                    margin-top:15px;
                }   
     </style>
     </head>
     <body>
          <fieldset align = "center">
              <legend><h1 id="font"> Discount</h1></legend>
               <form action="" method="post">
               <table align="center">
                     
					<tr>
					    <th><span>Discount Type</span></th>
						<td><input type="text" name="discount" placeholder="Discount Type">
						<span><?php echo $err_discount;?></span></td>
					</tr>
					 
					 <tr>
					    <th><span>Coupon Amount</span></th>
						<td><input type="text" name="coupon" placeholder="Coupon Amount">
						<span><?php echo $err_coupon;?></span></td>
					</tr>
					 
				
					
				<tr>
					    <th><span>Usage limit per user</span></th>
						<td><input type="text" name="puser" placeholder="Unlimited Usage">
						<span><?php echo $err_puser;?></span></td>
					</tr>
					
					
					 
					 
					 
					 
						<td colspan="3"><input class="my-font btn-mine" type="submit" name="submit" value="Edit"> 
					
						<input class="my-font btn-mine" type="submit" name="submit" value="Remove"> 
						
						<input class="my-font btn-mine" type="submit" name="submit" value="Apply"> </td>
					</tr>
              </table>
        </form>
    </fieldset>
    </body>
    </html>