<?php
 require_once 'models/db_config.php';
     $name="";
	 $err_name="";
	 
	 $phone="";
	 $err_phone="";
	 
	 
	 
	 
	 $bnum= " ";
	 $err_bnum = "";
	 
	 $city= " ";
	 $err_city = "";
	 
	 $pcode= " ";
	 $err_pcode = "";
	 
	 
	 
	 $extra= " ";
	 $err_extra = "";
	 
	 
	 
	 
	 
	 
	 $day="";
	 $err_day="";
	 
  
	 
	  $month="";
	 $err_month="";
	 
	  $year="";
	 $err_year="";
	 
	 $hour="";
	 $err_hour="";
	 
	  $min="";
	 $err_min="";
	 $hasError=false;
	
	 
		 
     if(isset($_POST["delivered"]))
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
			 
			 
	         if(empty($_POST["pcode"])){
		        $err_pcode= " Insert Your Postal Code ";
	         }
		     else{
			 $pcode = $_POST["pcode"];
		     }
			 
			 	
	         if(empty($_POST["extra"])){
		        $err_extra= " Insert Your Extra Requirment ";
	         }
		     else{
			 $extra = $_POST["extra"];
		     }
			 
			 
			 
			if(empty($_POST["day"])){
				 $err_day="Insert Joining Day";
				 $hasError=true;
			 }
			 else{
				 $day=$_POST["day"];
			 }
			 if(empty($_POST["month"])){
				 $err_month="Insert Joining Month";
				 $hasError=true;
			 }
			 else{
				 $month=$_POST["month"];
			 }
			 if(empty($_POST["year"])){
				 $err_year="Insert Joining Year";
				 $hasError=true;
			 }
			 else{
				 $year=$_POST["year"];
			 }


			if(empty($_POST["hour"])){
                 $err_hour="Hour Required";
             }
             else{
                 $hour=$_POST["hour"];
             }

         if(empty($_POST["min"])){
                 $err_min="Min Required";
             }
             else{
                 $min=$_POST["min"];
             }

            
			 
			 
			
			
			
			
			
			 insertDeliveryinfo($name,$phone,$bnum,$city,$pcode,$extra,$day,$month,$year,$hour,$min);
			  
		 } 
		 function insertDeliveryinfo($name,$phone,$bnum,$city,$pcode,$extra,$day,$month,$year,$hour,$min)
    {
        $query = "INSERT INTO deliveryinfo VALUES (NULL,'$name','$phone','$bnum','$city','$pcode','$extra','$day','$month','$year','$hour','$min')" ;
        echo $query ;
        execute($query) ;
		
		 
    }
?>