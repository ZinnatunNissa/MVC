
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
						if(get("pcode").value == ""){
						get("err_pcode").innerHTML=" Postal Required";
						get("err_pcode").style.color="orange";
						hasError=true;
					}
				if(get("day").value==""){
                  get("err_day").innerHTML= " Day Required";
                  get("err_day").style.color="red";
                    hasError=true;
                }
                 if(get("month").value == ""){
                  get("err_month").innerHTML= "Month Required";
               get("err_month").style.color="red";
                 hasError=true;
             }
			 if(get("year").value == ""){
               get("err_year").innerHTML= " Year Required";
                  get("err_year").style.color="green";
             hasError=true;
             }
			  if(get("hour").value == ""){
               get("err_hour").innerHTML= "Hour Required";
                  get("err_hour").style.color="red";
             hasError=true;
             }
			   if(get("min").value == ""){
               get("err_min").innerHTML= "Min Required";
                  get("err_min").style.color="red";
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
					get("err_pcode").innerHTML="";
					get("err_day").innerHTML="";
					get("err_month").innerHTML="";
					get("err_year").innerHTML="";
						get("err_min").innerHTML="";
					
					
				
				}
		
	
