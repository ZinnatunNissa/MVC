function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("f1").selected == false && get("f2").selected == false && get("f3").selected == false && get("f4").selected == false && get("f5").selected == false && get("f6").selected == false && get("f7").selected == false && get("f8").selected == false && get("f9").selected == false && get("f10").selected == false && get("f11").selected == false && get("f12").selected == false){
						get("err_name").innerHTML="Food Name Required";
						get("err_name").style.color="Cyan";
						hasError=true;
					}
					
				if(get("quantity").value == ""){
						get("err_quantity").innerHTML="Quantity Required";
						get("err_quantity").style.color="red";
						hasError=true;
					}
					if(get("address").value == ""){
						get("err_address").innerHTML=" address Required";
						get("err_address").style.color="blue";
						hasError=true;
					}
					if(get("phone").value == ""){
						get("err_phone").innerHTML="Number Required";
						get("err_phone").style.color="cyan";
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
				{    get("err_name").innerHTML="";
					get("err_quantity").innerHTML="";
					get("err_address").innerHTML="";
					get("err_phone").innerHTML="";
					get("err_email").innerHTML="";
				}
			1