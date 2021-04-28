	
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
						cleanUp();
					var hasError=false;
					if(get("name").value==""){
                   get("err_name").innerHTML= "Name Required";
                  get("err_name").style.color="red";
                  hasError=true;
}
					 if(get("email").value == ""){
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="orange";
						hasError=true;
					}
				    if(get("phone").value == ""){
						get("err_phone").innerHTML="Phone Number Required";
						get("err_phone").style.color="red";
						hasError=true;
					}
					if(get("day").value == ""){
						get("err_day").innerHTML="Day  Required";
						get("err_day").style.color="red";
						hasError=true;
					}
					if(get("month").checked == ""){
						get("err_month").innerHTML="Month  Required";
						get("err_month").style.color="red";
						hasError=true;
					}
					if(get("year").checked == ""){
						get("err_year").innerHTML="Year  Required";
						get("err_year").style.color="red";
						hasError=true;
					}
					
					if(get("hour").checked == ""){
						get("err_hour").innerHTML="hour Required";
						get("err_hour").style.color="cyan";
						hasError=true;
					}
					if(get("min").checked == ""){
						get("err_min").innerHTML="Min Required";
						get("err_min").style.color="cyan";
						hasError=true;
					}
				if(!hasError){
						return true;
					}
					return false;
				
				}
				
				
				function cleanUp()
				{
					get("err_name").innerHTML = "";
					get("err_email").innerHTML="";
					get("err_phone").innerHTML="";
					get("err_day").innerHTML="";
					get("err_month").innerHTML="";
					get("err_year").innerHTML="";
					get("err_hour").innerHTML="";
					get("err_min").innerHTML="";
					
					
				
				}