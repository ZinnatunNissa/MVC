	
				
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
						get("err_password").style.color="Green";
						hasError=true;
					}
					if(get("type").value == ""){
						get("err_type").innerHTML="Type Required";
						get("err_type").style.color="red";
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
					get("err_type").innerHTML="";
				}
				
				
				function checkUsername(control)
					{
						var username = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_username").innerHTML = "<br>Valid Username";
									document.getElementById("err_username").style.color = "green";
								}else{

									
								   document.getElementById("err_username").innerHTML = "<br>Not Valid Username";
								   document.getElementById("err_username").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checksignupUsernameValidity.php?username="+username,true);
						xhttp.send();
					}
			
				