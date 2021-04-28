<?php
    require_once 'models/db_config.php' ;	
     $order="";
	 $err_order="";
	 
     $addquantity="";
	 $err_addquantity="";
	 
	 $addanotherone="";
	 $err_addanotherone="";
	$hasError=false;
	

		
	
	
		
			 
			  if(isset($_POST["place_Order"])){
		 
			     if(empty($_POST["order"])){
				 $err_order=" Order Required";
			 }
			 else{
				 $order=$_POST["order"];
			 }
			 
			 
			 
			 
			 
			 
			 
			   if(empty($_POST["addquantity"])){
				 $err_addquantity="quantity Required";
			 }
			  elseif(!is_numeric($_POST["addquantity"])){
			     $addquantity="[Quantity should contain Numeric values only]";
		     }
			 else{
				 $addquantity=$_POST["addquantity"];
			 }
			 
			 
			 
			 
			 
			 
			 
			 insertPlaceorder ($order,$addquantity);
		}

		
	
	function insertPlaceorder($order,$addquantity)
    {
        $query = "INSERT INTO placeorder VALUES (NULL,'$order','$addquantity')" ;
        echo $query ;
        execute($query) ;
		 
    }

   
	 
	 
    
?>