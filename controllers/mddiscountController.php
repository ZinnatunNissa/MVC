<?php
	require_once 'models/db_config.php';
	
	 $name="";
	 $err_name="";
	 $pprice="";
	 $err_pprice="";
	 $dprice="";
	 $err_dprice="";
	 $hasError=false;
		 
     if(isset($_POST["add_discount"])){
		
            if (empty($_POST["name"])){
				$err_name="Name Required";
				$hasError=true;
			}
			 else{
				 $name=$_POST["name"];
			 }
			 
             if(empty($_POST["pprice"]))
		    {
			 $err_pprice="pprice Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["pprice"]))
		   {
			 $err_pprice="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $pprice=htmlspecialchars($_POST["pprice"]);
		    }
			 			
			 if(empty($_POST["dprice"]))
		    {
			 $err_dprice="dprice Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["dprice"]))
		   {
			 $err_dprice="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $dprice=htmlspecialchars($_POST["dprice"]);
		    } 
			insertDiscount($name,$pprice,$dprice);
		    
	}
	

	function insertDiscount($name,$pprice,$dprice){
		$query="INSERT INTO discount VALUES (NULL,'$name',$pprice,$dprice)";
		execute($query);
		header("Location: mddiscount.php");
		
	}
	
	
	///remove korte hobe
	//Remove
	if(isset($_POST["food_remove"]))
	{
		deleteDiscount($_POST["id"]); 
	} 
    function deleteDiscount($id)
	{
		$query = "DELETE FROM discount WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: mddiscount.php");
	} 
	
	//update/edit section

	if(isset($_POST["update_discount"]))
	{	
		edit($_POST["id"],$_POST["name"],$_POST["pprice"],$_POST["dprice"]);
	}
	function edit($id,$name,$pprice,$dprice){
		$query = "update discount set name ='$name', pprice = '$pprice', dprice = '$dprice' where id = $id";
		echo $query ;
		execute($query);
		header("Location: mddiscount.php");
	}

	
	//view section
	
	function getUpdateDiscount(){
		$query = "SELECT * FROM discount";
		$result = get($query);
		return $result;
	}
	function getDisc($id)
    {
        $query = "select * from discount where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
?>