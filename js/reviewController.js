
				function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					 if(get("name").value == ""){
						get("err_name").innerHTML="Name Required";
						get("err_name").style.color="cyan";
						hasError=true;
					}
					if(get("review").value == ""){
						get("err_review").innerHTML="Name Required";
						get("err_review").style.color="orange";
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
					get("err_review").innerHTML="";
				}
			
				
			
				
