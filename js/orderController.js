	function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("order").value == ""){
						get("err_order").innerHTML="order Required";
						get("err_order").style.color="orange";
						hasError=true;
					}
					if(get("addquantity").value == ""){
						get("err_addquantity").innerHTML="Quantity Required";
						get("err_addquantity").style.color="orange";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{  
				    get("err_order").innerHTML="";
					get("err_addquantity").innerHTML="";
				}