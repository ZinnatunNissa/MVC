
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
				    if(get("phone").value == ""){
						get("err_phone").innerHTML="phone Required";
						get("err_phone").style.color="green";
						hasError=true;
					}
					if(get("bnum").value == ""){
						get("err_bnum").innerHTML="Quantity Required";
						get("err_bnum").style.color="red";
						hasError=true;
					}
					if(get("city").value == ""){
						get("err_city").innerHTML=" City Required";
						get("err_city").style.color="blue";
						hasError=true;
					}
						 if(get("email").value == ""){
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="orange";
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
					get("err_phone").innerHTML="";
					get("err_bnum").innerHTML="";
					get("err_city").innerHTML="";
					get("err_email").innerHTML="";
					
					
				
				}
		
	
