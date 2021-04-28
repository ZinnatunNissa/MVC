<?php
 require_once 'dmModels/dmdb_config.php';
     $name="";
	 $err_name="";
	 
	 $phone="";
	 $err_phone="";
	 
	 
	 
	 
	 $bnum= " ";
	 $err_bnum = "";
	 
	 $city= " ";
	 $err_city = "";
	 
	$email="";
	$err_email="";
	 
	
	 $hasError=false;
	
	 
		 
     if(isset($_POST["profiled"]))
	 {
		     if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }
			 
			 
			 
			 
			 if(empty($_POST["phone"])){
				 $err_phone="Insert Your Phone Number";
			 }
			 elseif(!is_numeric($_POST["phone"])){
			     $err_phone="[Phone number should contain Numeric values only]";
		     }
			 elseif(strlen($_POST["phone"])<11){
				 $err_phone="Phone Number Must Be 11 Charachter Long";
			 }
			 elseif(strlen($_POST["phone"])>11){
				 $err_phone="Phone Number Must Be 11 Charachter Long";
			 }
			 else{
				 $phone=$_POST["phone"];
			 }
			 
			 
			 
			 
			
	         if(empty($_POST["bnum"])){
		        $err_bnum= " Insert Your Building Number ";
	         }
		     else{
			 $bnum = $_POST["bnum"];
		     }
			 
			 
	         if(empty($_POST["city"])){
		        $err_city= " Insert Your City ";
	         }
		     else{
			 $city = $_POST["city"];
		     }
			 
			 
	        
			 
			

            
			 
			  if (empty($_POST["email"])) {
                 $err_email = "Email is required";
				 $hasError= true;
             }
             elseif(!strpos($_POST["email"],"@")){
			     $err_email="[Email must contain @]";
				 $hasError= true;
		     }			 
			 else {
                 $email =$_POST["email"];
             }
			 
			
			
			
			
			
			 insertProfileinfo($name,$phone,$bnum,$city,$email);
			  
		 } 
		 function insertProfileinfo($name,$phone,$bnum,$city,$email)
    {
        $query = "INSERT INTO profileinfo VALUES (NULL,'$name','$phone','$bnum','$city','$email')" ;
        echo $query ;
        execute($query) ;
		
		 
    }
	function getUpdateprofileinfo(){
		$query = "SELECT * FROM profileinfo";
		$result = get($query);
		return $result;
	}
?>