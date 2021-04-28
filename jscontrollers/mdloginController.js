
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("username").value == ""){
						get("err_username").innerHTML="User name Required";
						get("err_username").style.color="orange";
						hasError=true;
					}
					if(get("password").value == ""){
						get("err_password").innerHTML="Password Required";
						get("err_password").style.color="red";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{
					get("err_username").innerHTML="";
					get("err_password").innerHTML="";
				}
				
