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
				
				}
				
				
				
				//ajax 
				
				
				function checkUsername(control)
					{
						var fname = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_fname").innerHTML = "<br>Valid Username";
									document.getElementById("err_fname").style.color = "green";
								}else{

									
								   document.getElementById("err_fname").innerHTML = "<br>Not Valid Username";
								   document.getElementById("err_fname").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checkFirstnameValidity.php?fname="+fname,true);
						xhttp.send();
					}
				
				
				function checkPhoneNumber(control)
					{
						var phone = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_phone").innerHTML = "<br>Valid Phone Number";
									document.getElementById("err_phone").style.color = "blue";
								}else{

									
								   document.getElementById("err_phone").innerHTML = "<br>Not Valid Phone Number";
								   document.getElementById("err_phone").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checkshippingPhoneValidity.php?phone="+phone,true);
						xhttp.send();
					}
					
					
					
					function checkEmail(control)
					{
						var email = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_email").innerHTML = "<br>Valid Email";
									document.getElementById("err_email").style.color = "blue";
								}else{

									
								   document.getElementById("err_email").innerHTML = "<br>Not Valid Email";
								   document.getElementById("err_email").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checkShippingEmail.php?email="+email,true);
						xhttp.send();
					}
			