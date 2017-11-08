<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Title of the page-->
<title>Employer Password reset</title>

<!--link to the css files one main.css and other contact.css-->
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/contact.css" type="text/css"/>
<style>
.submit {
    
    background-color: #4CAF50;
   
    padding: 14px 20px;
  
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:16px;
	color:black;
	font-weight:bold;
	margin:30px;
	
	
	
}


/*the hover property for the submit button*/
.submit:hover {
    background-color: #45a049;
}
.color{color:white;
font-size:20px;}
#hidden {
	
	display:none;
}
#hide {
	    visibility: hidden;
}
</style>
</head>
<body>
<?php
	#connect to mysql database
	$db = mysql_connect("studentdb-maria.gl.umbc.edu","dulkabi1","Umbckabin1");

	if(!$db)
		exit("Error - could not connect to MySQL");

	#select database sampath
	$er = mysql_select_db("dulkabi1");
	if(!$er)
		exit("Error - could not select cars database");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here


	
?>

<?php
$error = $question = $answererror= $password="";

if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		$error ="Input field is empty";
	}
	else{
		
		$sec_question = mysql_query("SELECT password FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              	$b = "password";
				$question ="Your Password is: ".$pw[$b];
					
				}
            
            else
            {
              $error ="Invalid information provided Cannot retrive password" ;
				
            }
		
	}
	
	
	
}

	

?>


<!--all the content other than the footer element is included with this div class body-->
<div class="body">

	<div>
	<!--list of navigation bar-->
		<ul>
			<li><img class="logo_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/></li>
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/about.html">About Us</a></li>			
		
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/contact.php">Contact</a></li>
				<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php">Home</a></li>
		</ul>
		<p class="spacer"></p>
	
		<hr/>
	</div>
	<!--body content-->
	<div>
		<!--the beggining of form content -->
	<div class="form">
	
		<p class="heading">Reset Password</p>
		
		<div id="logo">
			<img class="logo" src="https://swe.umbc.edu/~ppratik1/is448/project/logo.png" alt= "logo"/>
			<p class="spacer"></p>
		</div>
		
<div>
		<!--login information-->			

		<form action="" method="post">
		
				<p class="color"> <?php
echo $error;

?></p>
			<label id=<?php
$error ="";
if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		echo "text";
	}
	else{
		
		$sec_question = mysql_query("SELECT sec_question FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              echo "hidden";
					
				}
            
            else
            {
              echo "text";
				
            }
		
	}
	
	
	
}
	

?>
>Phone Number	<br/>
				<input type="text"


				name="phone" autofocus />
				<br/> 
			</label>
				<br/><br/>
				
			<label id=<?php
$error ="";
if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		echo "text";
	}
	else{
		
		$sec_question = mysql_query("SELECT sec_question FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              echo "hidden";
					
				}
            
            else
            {
              echo "text";
				
            }
		
	}
	
	
	
}
	

?> >Business Name<br/>
				<input type="text" name="bname"/>
</label>
			 <br/> 
			<br/>
			<label id=<?php
$error ="";
if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		echo "text";
	}
	else{
		
		$sec_question = mysql_query("SELECT sec_question FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              echo "hidden";
					
				}
            
            else
            {
              echo "text";
				
            }
		
	}
	
	
	
}
	

?>>ZIP CODE <br/> 
	
				<input type="text" name="zip"/>
			
			</label><br/>
			<label id=<?php
$error ="";
if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		echo "text";
	}
	else{
		
		$sec_question = mysql_query("SELECT sec_question FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              echo "hidden";
					
				}
            
            else
            {
              echo "text";
				
            }
		
	}
	
	
	
}
	

?>> <br/>User Name<br/>
				<input type="text" name="username"  />
				<br/> 
			</label>
			
			<br/>
			
		  <!--social media sites for facebook and twitter-->
	<p class="color">
	<?php
	echo $question;
	?>
	</p>
	<p class="color">
	<?php
	echo $password;
	?>
	</p>
			<input class= "submit" name="getpassword" type="submit"  value="Get Password" id=<?php
$error ="";
if(isset($_POST["getpassword"]))
{
	$phone =$_POST["phone"];
	$bname =$_POST["bname"];
	$zip =$_POST["zip"];
	$username =$_POST["username"];
	if(empty($phone)||empty($bname)||empty($zip)||empty($username))
	{
		echo "text";
	}
	else{
		
		$sec_question = mysql_query("SELECT sec_question FROM employer WHERE username = '".$username."' and b_name ='".$bname."' and ph_number ='".$phone."' and zipcode ='".$zip."' ");
	$pw = mysql_fetch_array($sec_question);
 
  if($pw > 0) 
            { 
              echo "hide";
					
				}
            
            else
            {
              echo "text";
				
            }	
	}
}

?>/>
      
</form>

		  
		  <p class="spacer"></p>
		  


</div>





		<div>
			 	<div class="socialmedia">
			
			<p class="smedia"><a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="facebook" /></a></p>
	 		<p class="smedia"><a href="https://www.twitter.com/" target="_blank"><img src="twitter.png" alt="facebook"/></a></p>
	
	</div>
	 <p class="spacer"></p>
</div>
	 <!--this is here for padding purposes.-->
	  <div class="forgot_password">
				
				
	  </div>
				
  </div>
		
		
		
		
		
  </div>
	</div>
	<!--footer element copy right notice-->
<div class="footer">
<hr/>
<p class="border">Copyright © 2017 <img class="footer_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/> Easy Connection. All rights reserved.</p>	
</div>

</body>
</html>
