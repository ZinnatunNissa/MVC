<?php
     require_once 'models/db_config.php';
	 
     $name="";
	 $err_name="";
	 $phone="";
	 $err_phone="";
	 $address="";
	 $err_address="";
	 $time="";
	 $err_time="";
	 $prepay="";
	 $err_prepay="";
	 
	 $hasError=false;
		 
     if(isset($_POST["add_reservation"])){
		 
			     if(empty($_POST["name"])){
				 $err_name="Name Required";
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
             else{
                 $phone=$_POST["phone"];
             }		   
             if(empty($_POST["address"])){
                $err_address= " Insert Your Address ";
             }
             else{
             $address = $_POST["address"];
             }
			 
			 if(empty($_POST["time"])){
				 $err_time="Select your time";
			 }
			 else{
				 $time=$_POST["time"];
			 }
			 
			 if(empty($_POST["prepay"])){
				 $err_prepay="Insert Pre Payment Amount";
			 }
			 else{
				 $prepay=$_POST["prepay"];
			 }
			  insertReservation ($name,$phone,$address,$time,$prepay);
	
	} 


	function insertReservation($name,$phone,$address,$time,$prepay){
		$query="INSERT INTO reservation VALUES (NULL,'$name',$phone,'$address','$time','$prepay')";
		execute($query);
		//echo $query;
		header("Location: mdreservationlist.php");
		
	}
	///remove korte hobe
	//Remove
	if(isset($_POST["delete_reservation"]))
	{
		deleteReservation($_POST["id"]); 
	} 
   function deleteReservation($id)
	{
		$query = "DELETE FROM reservation WHERE id=$id;";
		//echo $query;
		execute($query);
	   header("Location: mdreservationlist.php");
	}
	
	//update/edit section

	if(isset($_POST["edit_reservation"]))
	{	
		edit($_POST["id"],$_POST["name"],$_POST["phone"],$_POST["address"],$_POST["time"],$_POST["prepay"]);
	}
	function edit($id,$name,$phone,$address,$time,$prepay){
		$query = "update reservation set name ='$name', phone = '$phone' , address = '$address' ,time ='$time' , prepay ='$prepay' where id = $id";
		execute($query);
	   header("Location: mdreservationlist.php");
	}
	
	
	function getUpdateReservation(){
		$query = "SELECT * FROM reservation";
		$result = get($query);
		return $result;
	}
	function getReservation($id)
    {
        $query = "select * from reservation where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
	
	//ajax
	
	function checkUsernamee($name){
		$query = "select * from reservation where name='$name'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
	function checkNumber($phone){
		$query = "select * from reservation where phone='$phone'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	function checkAddres($address){
		$query = "select * from reservation where address='$address'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
	
	
	
	
?>