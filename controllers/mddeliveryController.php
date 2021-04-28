<?php
	require_once 'models/db_config.php';
	
	 $fname="";
	 $err_fname="";
	 
	 $lname="";
	 $err_lname="";
	 
	 $phone="";
	 $err_phone="";
	 
	 $address= "";
	 $err_address = "";
	 
	 $email="";
	 $err_email="";
	 
	 $price="";
	 $err_price="";
	 
	 $tax="";
	 $err_tax="";
	 
	 $tprice="";
	 $err_tprice="";
	
	 $hasError=false;
		 
    
     if(isset($_POST["add_delivery"])){
		
		 
		     if(empty($_POST["fname"])){
				 $err_fname="First Name Required";
			 }
			 else{
				 $fname=$_POST["fname"];
			 }
			 
			   if(empty($_POST["lname"])){
				 $err_lname="Last Name Required";
			 }
			 else{
				 $lname=$_POST["lname"];
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
			 else{
				 $phone=$_POST["phone"];
			 }
			
	         if(empty($_POST["address"])){
		        $err_address= " Insert Your Address ";
	         }
		     else{
			 $address = $_POST["address"];
		     }
			 
			 if(empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@")){
                 $err_email="[Email must contain @]";
             }            
             else {
                 $email =$_POST["email"];
             }
	
			if(empty($_POST["price"])){
		        $err_price= " Insert price ";
	         }
		     else{
			 $price = $_POST["price"];
		     }
			 
			  if(empty($_POST["tax"])){
		        $err_tax= " Insert tax ";
	         }
		     else{
			 $tax = $_POST["tax"];
		     }
			 
			  if(empty($_POST["tprice"])){
		        $err_tprice= " Insert Total Price ";
	         }
		     else{
			 $tprice = $_POST["tprice"];
		     }
			 
			 
			  
	        insertDelivery($fname,$lname,$phone,$address,$email,$price,$tax,$tprice);
		    
	}
	

	function insertDelivery($fname,$lname,$phone,$address,$email,$price,$tax,$tprice){
		$query="INSERT INTO delivery VALUES (NULL,'$fname','$lname',$phone,'$address','$email',$price,$tax,$tprice)";
		execute($query);
		header("Location: mdDeliverydetails.php");
		
	}
	
   
	
	//view section
	
	
	function getDeliveryDetails(){
		$query = "SELECT * FROM delivery";
		$result = get($query);
		return $result;
	}
	
	
	
	
?>