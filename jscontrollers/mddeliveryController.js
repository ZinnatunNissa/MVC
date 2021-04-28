function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("fname").value == ""){
						get("err_fname").innerHTML="First Name Required";
						get("err_fname").style.color="blue";
						hasError=true;
					}
				    if(get("lname").value == ""){
						get("err_lname").innerHTML="Last Name Required";
						get("err_lname").style.color="blue";
						hasError=true;
					}
					if(get("phone").value == ""){
						get("err_phone").innerHTML="Number Required";
						get("err_phone").style.color="red";
						hasError=true;
					}
					if(get("address").value == ""){
						get("err_address").innerHTML=" address Required";
						get("err_address").style.color="blue";
						hasError=true;
					}
					if(get("email").value == ""){
						get("err_email").innerHTML=" Email Required";
						get("err_email").style.color="green";
						hasError=true;
					}
					
					if(get("price").value == ""){
						get("err_price").innerHTML=" price Required";
						get("err_price").style.color="green";
						hasError=true;
					}
					
					if(get("tax").value == ""){
						get("err_tax").innerHTML="tax Required";
						get("err_tax").style.color="green";
						hasError=true;
					}
					
					if(get("tprice").value == ""){
						get("err_tprice").innerHTML="Total Price Required";
						get("err_tprice").style.color="red";
						hasError=true;
					}
						if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_fname").innerHTML="";
					get("err_lname").innerHTML="";
					get("err_phone").innerHTML="";
					get("err_address").innerHTML="";
					get("err_email").innerHTML="";
					get("err_price").innerHTML="";
					get("err_tax").innerHTML="";
					get("err_tprice").innerHTML="";
					
			    }