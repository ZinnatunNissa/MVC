	function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("name").value == ""){
						get("err_name").innerHTML="Name Required";
						get("err_name").style.color="red";
						hasError=true;
					}
				    if(get("phone").value == ""){
						get("err_phone").innerHTML=" Phone Number Required";
						get("err_phone").style.color="purple";
						hasError=true;
					}
					if(get("address").value == ""){
						get("err_address").innerHTML="AddressRequired";
						get("err_address").style.color="blue";
						hasError=true;
					}
					if(get("prepay").value == ""){
						get("err_prepay").innerHTML="Pre payment Required";
						get("err_prepay").style.color="green";
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
					//get("err_catagory_id").innerHTML="";
					get("err_address").innerHTML="";
					get("err_prepay").innerHTML="";
				
				}
				
				//ajax 
				
				
				function checkUsername(control)
					{
						var name = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_name").innerHTML = "<br>Valid Username";
									document.getElementById("err_name").style.color = "green";
								}else{

									
								   document.getElementById("err_name").innerHTML = "<br>Not Valid Username";
								   document.getElementById("err_name").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checkreservusernameValidty.php?name="+name,true);
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
						xhttp.open("GET","checkreservusernameValidty.php?phone="+phone,true);
						xhttp.send();
					}
					
						
				function checkAddress(control)
					{
						var address = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var rsp = this.responseText;
								if(rsp == "true"){
									document.getElementById("err_address").innerHTML = "<br>Valid address";
									document.getElementById("err_address").style.color = "blue";
								}else{

									
								   document.getElementById("err_address").innerHTML = "<br>Not Valid address";
								   document.getElementById("err_address").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","checkreservusernameValidty.php?address="+address,true);
						xhttp.send();
					}
					
			