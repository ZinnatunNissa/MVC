<?php
	require_once 'models/db_config.php';
	
	 $name="";
	 $err_name="";
	 
	 $quantity="";
	 $err_quantity="";
	 
	 $address="";
	 $err_address="";
	 
	 $phone= "";
	 $err_phone = "";
	 
	 $email="";
	 $err_email="";
	
	 $hasError=false;
		 
    
     if(isset($_POST["insert_order"])){
		
		 
		     if(empty($_POST["name"])){
				 $err_name="Food Name Required";
			 }
			 else{
				 $name=$_POST["name"];
			 }
			 
			 if(empty($_POST["quantity"])){
				 $err_quantity="Quantity Required";
			 }
			 else{
				 $quantity=$_POST["quantity"];
			 }
			 
	         if(empty($_POST["address"])){
		        $err_address= " Insert Your Address ";
	         }
		     else{
			 $address = $_POST["address"];
		     }
			 
			 if(empty($_POST["phone"])){
		
			 	 $err_phone="Insert Customer's Phone Number";
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
			
			 
			 if(empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@")){
                 $err_email="[Email must contain @]";
             }            
             else {
                 $email =$_POST["email"];
             }
			  
	        insertOrdermenu($name,$quantity,$address,$phone,$email);
		    
	}
	function insertOrdermenu($name,$quantity,$address,$phone,$email){
		$query="INSERT INTO ordermenu VALUES (NULL,'$name','$quantity','$address',$phone,'$email')";
		execute($query);
		header("Location: mdorderdetails.php");
		}
		
	//add/update
	function getInsertOrdermenu(){
		$query = "SELECT * FROM ordermenu";
		$result = get($query);
		return $result;
		header("Location: mdorderdetails.php");
	}
	
	
	//Remove
	if(isset($_POST["cancel_order"]))
	{
		deleteOrdermenu($_POST["id"]); 
	} 
   function deleteOrdermenu($id)
	{
		$query = "DELETE FROM ordermenu WHERE id=$id;";
		//echo $query;
		execute($query);
	  header("Location: mdorderdetails.php");
	}
	function getOrdermenu($id)
    {
        $query = "select * from ordermenu where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
?>