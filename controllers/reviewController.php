<?php
     require_once 'models/db_config.php';
	 $name="";
	 $err_name="";
    $review="";
	 $err_review="";
		 $hasError=false;
    
	if(isset($_POST["reviewed"])){
		 
		  if(empty($_POST["name"])){
				 $err_name="Name Required";
			 }
			 elseif(isset($_POST[""])){
		         echo htmlspecialchars($_POST["name"]);
		     }
			 else{
				 $name=$_POST["name"];
			 }
		if(empty($_POST["review"]))
		{
			 $err_review="Please write something on Comment Box";
		 }
					 else{
						 $review=$_POST["review"];
					 }
				  
				 insertAllreview ($name,$review);
	 }
	 
	function insertAllreview($name,$review)
    {
        $query = "INSERT INTO allreview VALUES (NULL,'$name','$review')" ;
        echo $query ;
        execute($query) ;
		 
    }
	
	function checkUsernamee($name){
		$query = "select * from allreview where name='$name'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
		?>
		