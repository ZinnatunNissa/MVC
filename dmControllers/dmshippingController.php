<?php
	require_once 'dmModels/dmdb_config.php';
	
	 $number="";
	 $err_number="";
	 
	 $name="";
	 $err_name="";
	 
	 $address= "";
	 $err_address = "";
	 
	 $price="";
	 $err_price="";
	
	 $hasError=false;
		 
    
     if(isset($_POST["add_shipping"])){
		
		 
		     if(empty($_POST["number"])){
				 $err_number="number Required";
			 }
			 else{
				 $number=$_POST["number"];
			 }
			 
			   if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 else{
				 $name=$_POST["name"];
			 }
			 
	         if(empty($_POST["address"])){
		        $err_address= " Insert Your Address ";
	         }
		     else{
			 $address = $_POST["address"];
		     }
			 
			 if(empty($_POST["price"])) {
                 $err_price = "price required";
             }       
             else {
                 $price =$_POST["price"];
             }
			  
	        insertShipping1($number,$name,$address,$price);
		    
	}
	

	function insertShipping1($number,$name,$address,$price){
		$query="INSERT INTO shipping1 VALUES (NULL,'$number','$name','$address','$price')";
		execute($query);
		echo $query;
		header("Location: dmHistory.php");
		
	}
	//view 
	function getUpdateShipping1(){
		$query = "SELECT * FROM shipping1";
		$result = get($query);
		return $result;
	}
//delete portion 

	if(isset($_POST["delete_shipping"]))
	{
		deleteShipping1($_POST["id"]); 
	} 
    function deleteShipping1($id)
	{
		$query = "DELETE FROM shipping1 WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dmHistory.php");
	}
	function getShipping1($id)
    {
        $query = "select * from shipping1 where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
	
?>