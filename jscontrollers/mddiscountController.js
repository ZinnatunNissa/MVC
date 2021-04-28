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
					
				    if(get("pprice").value == ""){
						get("err_pprice").innerHTML=" Previous price Required";
						get("err_pprice").style.color="purple";
						hasError=true;
					}
					if(get("dprice").value == ""){
						get("err_dprice").innerHTML="Discount price Required";
						get("err_dprice").style.color="red";
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
					get("err_pprice").innerHTML="";
					get("err_dprice").innerHTML="";
				
				}