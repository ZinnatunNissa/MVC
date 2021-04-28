<?php
	require_once 'models/db_config.php';
	
	 $name="";
	 $err_name="";
	 $price="";
	 $err_price="";
	 $catagory_id="";
	 $err_catagory_id="";
	 $quantity="";
	 $err_quantity="";
	 $addedby="";
	 $err_addedby="";
	 $hasError=false;
		 
     if(isset($_POST["add_menu"])){
		
            if (empty($_POST["name"])){
				$err_name="Name Required";
				$hasError=true;
			}
			 else{
				 $name=$_POST["name"];
			 }
			 
             if(empty($_POST["price"]))
			 {
				$err_price="Price Required";
				$hasError=true;
			 }
			
			 else{
				 $price=$_POST["price"];
			 }
			 
             if(!isset($_POST["catagory_id"]))
			 {
				$err_catagory_id="Catagory id Required";
				$hasError=true;
			 }
			else{
				 $catagory_id=$_POST["catagory_id"];
			 }
			
			
			if(empty($_POST["quantity"]))
		    {
			$err_quantity="Quantity required";
			$hasError=true;
		    }
		    else{
				 $quantity=$_POST["quantity"];
			 }
			if(empty($_POST["addedby"]))
			{
			$err_addedby="Added By Required";
			$hasError=true;
		    }
		    else
			{
		        $addedby=($_POST["addedby"]);
		     }
		
			 insertMenuu($name,$price,$catagory_id,$quantity,$addedby);
			 
		    
	}
	
	function insertMenuu($name,$price,$catagory_id,$quantity,$addedby){
		$query="INSERT INTO menuu VALUES (NULL,'$name',$price,'$catagory_id','$quantity','$addedby')";
		execute($query);
	   header("Location: mdupdatemenu.php");	
	}
	///remove korte hobe
	//Remove
	if(isset($_POST["delete_menu"]))
	{
		deleteMenuu($_POST["id"]); 
	} 
    function deleteMenuu($id)
	{
		$query = "DELETE FROM menuu WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: mdupdatemenu.php");
	}
	
	//update/edit section

	if(isset($_POST["edit_menu"]))
	{	
		edit($_POST["id"],$_POST["name"],$_POST["price"],$_POST["catagory_id"],$_POST["quantity"],$_POST["addedby"]);
	}
	function edit($id,$name,$price,$catagory_id,$quantity,$addedby){
		$query = "update menuu set name ='$name', price = '$price', catagory_id = '$catagory_id' , quantity = '$quantity' , addedby = '$addedby' where id = $id";
		echo $query ;
		execute($query);
	    header("Location: mdupdatemenu.php");
	}

	
	//view section
	
	function getUpdateMenuList(){
				$query = "SELECT * FROM menuu";
				//$query = "SELECT p.*,c.name as 'c_name' FROM products p left join categories c on p.category_id = c.id";
				$result = get($query);
				return $result;
	}
	
	function getMenu($id)
    {
        $query = "select * from menuu where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
?>