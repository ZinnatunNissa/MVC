<?php
    require_once "controllers/mdloginController.php" ;
?>
<html>
       <title>SignUP</title>
    <head> 
    <style>
		    body{
				background-color:rgb(223,223,242);
				
			}
		.my-font{
				font-size:35px;
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
    </head>
    <body>
    <div class="login-div">
        
           <fieldset align= "center" >
              <legend align="center"><h1 id="font">Sign Up</h1></legend>

		<form action="" method="post" onsubmit="return validate()">
		<div class="my-font">
		<table align="center",border ="5">
                <tr>
                    <td><span><b>Username:</b></span></td>
                    <td><input type="text" id="username" value="<?php echo $username;?>" name="username" onfocusout="checkUsername(this)" placeholder="Username">
                        <span id="err_username"><?php echo $err_username;?></span></td>
                </tr>
				
                
                <tr>
                    <td><span><b>Password:</b></span></td>
                    <td><input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
                        <span id="err_password"><?php echo $err_password;?></span></td>
                </tr>
                 
				  <tr>
                    <td><span><b>type:</b></span></td>
                    <td><input type="text" id="type" value="<?php echo $type;?>" name="type" placeholder="type">
                        <span id="err_type"><?php echo $err_type;?></span></td>
                </tr>
				 
                <tr>
                    <td><input type="submit" name="sign_up" value="Sign Up"></td>
                </tr>
            </table>
			
    </form> 
    </fieldset>
    </div>
		 <script src ="jscontrollers/mdsignupController.js"> </script>

    </body>
 </html>