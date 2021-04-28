function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("name").value == ""){
						get("err_name").innerHTML="Name Required";
						get("err_name").style.color="blue";
						hasError=true;
					}
				    if(get("price").value == ""){
						get("err_price").innerHTML="price Required";
						get("err_price").style.color="green";
						hasError=true;
					}
					if(get("cat1").selected == false && get("cat2").selected == false && get("cat3").selected == false){
						get("err_catagory_id").innerHTML="Catagory Required";
						get("err_catagory_id").style.color="blue";
						hasError=true;
					}
					if(get("quantity").value == ""){
						get("err_quantity").innerHTML="Quantity Required";
						get("err_quantity").style.color="red";
						hasError=true;
					}
					if(get("addedby").value == ""){
						get("err_addedby").innerHTML=" Added Required";
						get("err_addedby").style.color="blue";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_name").innerHTML="";
					get("err_price").innerHTML="";
					get("err_catagory_id").innerHTML="";
					get("err_quantity").innerHTML="";
					get("err_addedby").innerHTML="";
				
				}