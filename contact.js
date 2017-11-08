// JavaScript Document
function validation(){
	
	
	
	// validation of first name in the employer and user sign up, and contact page
	firstnameValidation();
	// validation of first name in the employer and user sign up, and contact page
	lastnameValidation();
	// validation of first name in the employer and user sign up, and contact page
	
	phoneValidation();
	// validation of first name in the employer and user sign up, and contact page
	emailValidation();
	// validation of first name in the employer and user sign up, and contact page
	cityValidation();
	// validation of first name in the employer and user sign up, and contact page
	stateValidation();
	// validation of first name in the employer and user sign up, and contact page
	streetValidation();
	// validation of first name in the employer and user sign up, and contact page
	zipcodeValidation();
	// validation of first name in the employer and user sign up, and contact page
		usernameValidation();
	passwordValidation();
	securityValidation();
	answerValidation();
	
	if(firstnameValidation()&& lastnameValidation()&& phoneValidation()&& cityValidation()&& stateValidation()&& streetValidation()&& zipcodeValidation()&& emailValidation()&& usernameValidation()&& passwordValidation()&& securityValidation()&&
	answerValidation())
	{
		
		
		document.getElementById("user_form").action = "https://swe.umbc.edu/~ppratik1/is448/project/user.php";
	}
	
}

function emp_validation(){
	
	
	
	// validation of first name in the employer and user sign up, and contact page
	firstnameValidation();

	// validation of first name in the employer and user sign up, and contact page
	
	phoneValidation();
	// validation of first name in the employer and user sign up, and contact page
	emailValidation();
	// validation of first name in the employer and user sign up, and contact page
	cityValidation();
	// validation of first name in the employer and user sign up, and contact page
	stateValidation();
	// validation of first name in the employer and user sign up, and contact page
	streetValidation();
	// validation of first name in the employer and user sign up, and contact page
	zipcodeValidation();
	// validation of first name in the employer and user sign up, and contact page
	usernameValidation();
	passwordValidation();
	securityValidation();
	answerValidation();
	
	if(firstnameValidation()&& phoneValidation()&& cityValidation()&& stateValidation()&& streetValidation()&& zipcodeValidation()&& emailValidation()&& usernameValidation()&& passwordValidation()&& securityValidation()&& answerValidation())
	{
		
		
		document.getElementById("emp_form").action = "https://swe.umbc.edu/~ppratik1/is448/project/emp.php";
	}
	
}


//--------------------------------------------------------
//function to validate first name
function firstnameValidation()
{
	// getting the value of name 
	var name = document.getElementById("firstname");
	
	// searching for any numbers in the user input
	var name_index = name.value.search(/\d/);
			
	// condition if you get any number display this message
			if(name_index >= 0)
				{
					document.getElementById("firstname_error").innerHTML="**Your first name cannot have number";

					name.focus();					
                    name.select();
					return false;
				}
		// condition is user didnot input anything display this message	
			else if(name.value === "")
				{
					document.getElementById("firstname_error").innerHTML="**Please Provide Your frist Name.";
					name.focus();					
                    name.select();
					return false;
				}
	// condition if everything is validated return true by removing the error message
		else{
			document.getElementById("firstname_error").innerHTML="";
			return true;
		}
	}
//--------------------------------------------------------
//function to validate last name
function lastnameValidation()
{
	// getting the value of name 
	var name = document.getElementById("lastname");
	
	// searching for any numbers in the user input
	var name_index = name.value.search(/\d/);
			
	// condition if you get any number display this message
			if(name_index >= 0)
				{
					document.getElementById("lastname_error").innerHTML="**Your name cannot have number";
					name.focus();					
                    name.select();
					return false;
				}
		// condition is user didnot input anything display this message	
			else if(name.value === "")
				{
					document.getElementById("lastname_error").innerHTML="**Please Provide Your last Name.";
					name.focus();					
                    name.select();
					return false;
				}
	// condition if everything is validated return true by removing the error message
		else{
			document.getElementById("lastname_error").innerHTML="";
			return true;
		}
	}
//---------------------------------------------------------
// phone validation

    // validation for phone
function phoneValidation(){
	
    var phone = document.getElementById("phone");
	var pos = phone.value.search(/^\d{3}\d{3}\d{4}$/);

  			if (phone.value === "" ){
		
	  		document.getElementById("phone_error").innerHTML="**Please Provide your Phone number .";
			phone.focus();					
    		phone.select();
    		return false;
				}
			else if(pos != 0)
  					{
    				document.getElementById("phone_error").innerHTML= "( " + phone.value +") is incorrect. The correct form is: ddd-ddd-dddd ";
   					phone.focus();
					phone.select();
    				return false;
  					} 

		else{
			document.getElementById("phone_error").innerHTML="";
			return true;
			}
	
}
//-------------------------------------------------------------------------

	 // validation for email

function emailValidation(){
	var email = document.getElementById("email");
	var email_index = /\w+\@\w+\.\w+/;
	var result =email_index.test(email.value);
	if(result)
				{
					document.getElementById("email_error").innerHTML="";
					return true;
				}
			
			else if(email.value === "")
				{
					document.getElementById("email_error").innerHTML="**Please Provide Your email address.";
					email.focus();					
                    email.select();
					return false;
				}
	else{
		
		document.getElementById("email_error").innerHTML="**Please Provide your correct email address";
					email.focus();					
                    email.select();
					return false;
	}
	
	}
	
//--------------------------------------------------------------------------------
//city validation in employer sign up and user sign up	
	function cityValidation(){
	
	var city = document.getElementById("city");
	var city_index = city.value.search(/\d/);
			
			if(city_index >= 0)
				{
					document.getElementById("city_error").innerHTML="**Your city name cannot have number";
					city.focus();					
                    city.select();
					return false;
				}
			
			else if(city.value === "")
				{
					document.getElementById("city_error").innerHTML="**Please Provide the city .";
					city.focus();					
                    city.select();
					return false;
				}
		else{
			document.getElementById("city_error").innerHTML="";
			return true;
		}
	
	
}

//---------------------------------------------------------------------
	//validation for the  state 

function stateValidation(){
	 var state = document.getElementById("state");
	
			if(state.value === "" )
			{
				    document.getElementById("state_error").innerHTML="**Please Provide the state .";
					state.focus();					
                    state.select();
					return false;
			}
			else {
				
				return true;
			}
			
		}	
		
//-------------------------------------------------
//street validation in employer and user sign up page		
function streetValidation(){
	
	var st_address = document.getElementById("st_address");
	var street_index = /\d+\s\w/;
	var result =street_index.test(st_address.value);
	
	if(result)
				{
					document.getElementById("st_error").innerHTML="";
					return true;
				}
			
			else if(st_address.value === "")
				{
					document.getElementById("st_error").innerHTML="**Please Provide Your Street address.";
					st_address.focus();					
                    st_address.select();
					return false;
				}
	else{
		
		document.getElementById("st_error").innerHTML="**Please Provide address in correct format as (street_number street_name).";
					st_address.focus();					
                    st_address.select();
					return false;
	}
	
	}		
//--------------------------------------------------------		
// zipcode validation
function zipcodeValidation(){
	
    var zipcode = document.getElementById("zipcode");
	var pos = zipcode.value.search(/^\d{5}$/);

  			if (zipcode.value === "" ){
		
	  		document.getElementById("zip_error").innerHTML="**Please Provide your zipcode .";
			phone.focus();					
    		phone.select();
    		return false;
				}
			else if(pos != 0)
  					{
    				document.getElementById("zip_error").innerHTML = "( " + zipcode.value +") is incorrect. The correct form is: ddddd ";
   					phone.focus();
					phone.select();
    				return false;
  					} 

		else{
			document.getElementById("zip_error").innerHTML="";
			return true;
			}
	
}

//---------------------------------------------------
// user name validation
function usernameValidation(){
	var uname = document.getElementById("uname");
	if(uname.value ==="")
	{
		document.getElementById("user_error").innerHTML="**Please Provide a username .";
		return false;
	
	}
	else{
	document.getElementById("user_error").innerHTML="";
	return true;
	
	}
	
	
	
}

//----------------------------------------------------
//password word match
function passwordValidation()
{
	var cpass = document.getElementById("cpassword");
	var rpass = document.getElementById("rpassword");
	if(cpass.value ==="" || rpass.value ==="")
	{
		
		document.getElementById("password_error").innerHTML="**Please Provide password .";
		return false;
		
	}
	else if(cpass.value != rpass.value )
	{
		document.getElementById("password_error").innerHTML="**Passowrd must match each password .";
		return false;
	}
	else {
	document.getElementById("password_error").innerHTML="";
	return true;
	
	}
}
//................................................................
//Security question validation
function securityValidation(){
	
	var security = document.getElementById("security");
	if(security.value ==="")
	{
		document.getElementById("security_error").innerHTML="**Please select a security question.";
		return false;
		
	}
	else{
		
		document.getElementById("security_error").innerHTML="";
	return true;
		
	}
	
	
}
//''''''''''''''''''''''''''''''''''''''''''''''''''''
// Answer validation
function answerValidation()
{
	var answer=document.getElementById("answer");
	if(answer.value === "")
	{
		document.getElementById("answer_error").innerHTML="**Please input a security answer.";
		return false;
		
	}
	else{
		
		document.getElementById("answer_error").innerHTML="";
	return true;
		
	}
	
}
//-------------------------------------------------------------
//function to get the city and state by inputing just zipcode on the employer and user sign up pages
function getPlace(valueOfZipCode){
	
  new Ajax.Request( "https://swe.umbc.edu/~ppratik1/is448/project/getCityState.php",
  { 
    method: "get", 
    parameters: {zip:valueOfZipCode},
    onSuccess: displayCityState
  } );
}
function displayCityState(ajax){
      var result = ajax.responseText;
      var place = result.split(', ');
      $("city").value = place[0];
      $("state").value = place[1];
}	




