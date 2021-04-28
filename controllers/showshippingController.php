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
	
	 $hasError=false;
		 
    
     if(isset($_POST["add_shipping"])){
		
		 
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
			  
	        insertShipping($fname,$lname,$phone,$address,$email);
		    
	}
	

	function insertShipping($fname,$lname,$phone,$address,$email){
		$query="INSERT INTO shipping VALUES (NULL,'$fname','$lname',$phone,'$address','$email')";
		execute($query);
		header("Location: showshippingdetails.php");
		
	}
	

	//view section
	
	
	function getUpdateShipping(){
		$query = "SELECT * FROM shipping";
		//$query = "SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.category_id = c.id";
		$result = get($query);
		return $result;
	}
	

	
	
?>
		