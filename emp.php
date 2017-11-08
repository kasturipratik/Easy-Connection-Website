<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Employer sign up </title>
	
	<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/applicantpage.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/extra.css" type="text/css"/>

</head>
<body>
<div class="body">

<div>
	
		<ul>
		<li><img class="logo_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/></li>
		<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/about.html">About Us</a></li>
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/contact.php">Contact</a></li>
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php">Home</a></li>
		</ul>
		<p class="spacer"></p>
	
	<hr/>
	</div>
<div >
		
	<div class="form">
		<div id="logo">
		<p class="apply">Thank you for Signing Up  </p>
				
		
		<p class="spacer"></p>
		</div>
			
<div class="submit">
<a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php"><input type="button" value="LOG IN" /></a>

</div>
			
<!--social media sites for facebook and twitter-->
 	<div class="socialmedia">
			
			<p class="smedia"><a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="facebook" /></a></p>
	 		<p class="smedia"><a href="https://www.twitter.com/" target="_blank"><img src="twitter.png" alt="facebook"/></a></p>
	
	</div>
			
	
	
		
  </div>
	</div>
	</div>
<div class="footer">
<hr/>
<p class="border">Copyright © 2017 <img class="footer_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/> Easy Connection. All rights reserved.</p>	
</div>

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
	$bname = $_POST['bname'];
	$username = $_POST['uname'];
	$password = $_POST ['cpassword'];
	$street = $_POST ['street'];
	$zip = $_POST ['zip'];
	$city = $_POST ['city'];
	$phone = $_POST ['phone'];
	$email = $_POST ['email'];
	$state = $_POST ['state'];
	$sec_q = $_POST ['sec_question'];
	$answer = $_POST ['answer'];
	
	
?>


<?php
	#construct a query
	#query should look like this: 
	#select * from cars where car_name='corvette'
	$constructed_query = "INSERT INTO employer (B_name, street, zipcode, city, state, ph_number, email, username, password, sec_question, answer)Values 
('$bname', '$street' , '$zip', '$city', '$state', '$phone', '$email', '$username', '$password', '$sec_q', '$answer')";
	
						  
	
	#Execute query
	$result = mysql_query($constructed_query);
	


	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysql_error();
		print "<p> . $error . </p>";
		exit;
	}
?>
 

</body>
</html>