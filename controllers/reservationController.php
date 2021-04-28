<?php
     require_once 'models/db_config.php';
     
    $name="";
	 $err_name="";

	 
	 $email="";
	 $err_email="";

	 $phone="";
	 $err_phone="";
	
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
         
     if(isset($_POST["reservation"])){
         
                 if(empty($_POST["name"])){
				 $err_name="Name Required";
				 $hasError= true;
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
				 $hasError= true;
		     }
			 else{
				 $name=$_POST["name"];
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


			
			  if(empty($_POST["phone"])){
                 $err_phone="Insert Your Phone Number";
				 $hasError= true;
             }
             elseif(!is_numeric($_POST["phone"])){
                 $err_phone="[Phone number should contain Numeric values only]";
				 $hasError= true;
             }
            
             elseif(strlen($_POST["phone"])>11){
                 $err_phone="Phone Number Must Be 11 Charachter Long";
				 $hasError= true;
             }
             else{
                 $phone=$_POST["phone"];
             }





			if(empty($_POST["day"])){
                 $err_day="Day Required";
				 $hasError= true;
             }
             else{
                 $day=$_POST["day"];
             }
			 
			 
			 
			 
			 
			if(empty($_POST["month"])){
                 $err_month="month Required";
				 $hasError= true;
             }
             else{
                 $month=$_POST["month"];
             }
			 
			 
			 
			 
			 
			if(empty($_POST["year"])){
                 $err_year="year Required";
				 $hasError= true;
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

             if(!$hasError){
				 
			   insertReserved($name,$email,$phone,$day,$month,$year,$hour,$min);

			 }
			
             
            
              
    
    } 


		
	
	function insertReserved($name,$email,$phone,$day,$month,$year,$hour,$min)
    {
        $query = "INSERT INTO reserved VALUES (NULL,'$name','$email','$phone','$day','$month','$year','$hour','$min')" ;
        echo $query ;
        execute($query) ;
		 
    }
	
	
	
	

	
	
	
	
	
	
	
	
	?>
    
   