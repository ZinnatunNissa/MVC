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
		header("Location: mdshipping.php");
		
	}
	///remove korte hobe
	//Remove
	/*if(isset($_POST["delete_menu"]))
	{
		deleteMenuu($_POST["id"]); 
	} 
   function deleteMenuu($id)
	{
		$query = "DELETE FROM menuu WHERE id=$id;";
		echo $query;
		execute($query);
		//header("Location: updatemenu.php");
	}*/
	
	//update/edit section

	if(isset($_POST["edit_shipping"]))
	{	
		edit($_POST["id"],$_POST["fname"],$_POST["lname"],$_POST["phone"],$_POST["address"],$_POST["email"]);
	}
	function edit($id,$fname,$lname,$phone,$address,$email){
		$query = "update shipping set fname ='$fname', lname ='$lname', phone = '$phone' , address = '$address' , email = '$email' where id = $id";
		echo $query ;
		execute($query);
	    header("Location: mdshipping.php");
	}
	
	function getShipping($id)
    {
        $query = "select * from shipping where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
   
	
	//view section
	
	
	function getUpdateShipping(){
		$query = "SELECT * FROM shipping";
		//$query = "SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.category_id = c.id";
		$result = get($query);
		return $result;
	}
	
	//ajax
	
	function checkUsernamee($fname){
		$query = "select * from shipping where fname='$fname'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
	function checkNumber($phone){
		$query = "select * from shipping where phone='$phone'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
		function checkEmails($email){
		$query = "select * from shipping where email='$email'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
	
	
?>