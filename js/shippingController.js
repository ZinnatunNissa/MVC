function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
						cleanUp();
					var hasError=false;
					if(get("fname").value==""){
                   get("err_fname").innerHTML= " First Name Required";
                  get("err_fname").style.color="red";
                  hasError=true;
					}
				  
				  if(get("lname").value==""){
                   get("err_lname").innerHTML= "Name Required";
                  get("err_lname").style.color="red";
                  hasError=true;
                         }
						  if(get("phone").value == ""){
						get("err_phone").innerHTML="Phone Number Required";
						get("err_phone").style.color="red";
						hasError=true;
					}

                      if(get("address").value == ""){
						get("err_address").innerHTML="Address Required";
						get("err_address").style.color="red";
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
					get("err_fname").innerHTML = "";
					get("err_lname").innerHTML = "";
					get("err_phone").innerHTML="";
					get("err_address").innerHTML="";
					get("err_email").innerHTML="";
					
					
					
					
				
				}