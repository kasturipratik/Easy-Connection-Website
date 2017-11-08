<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Title of the page-->
<title>Contact Easy Connection</title>

<!--link to the css files one main.css and other contact.css-->
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/contact.css" type="text/css"/>

</head>
<body>
<!--all the content other than the footer element is included with this div class body-->
<div class="body">

	<div>
	<!--list of navigation bar-->
		<ul>
			<li><img class="logo_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/></li>
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/about.html">About Us</a></li>			
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php">Home</a></li>
			<li class="home"><a href="https://swe.umbc.edu/~ppratik1/is448/project/contact.php">Contact</a></li>
			
		</ul>
		<p class="spacer"></p>
	
		<hr/>
	</div>
	<!--body content-->
	<div>
		<!--the beggining of form content -->
	<div class="form">
	
		<p class="heading">Feed Back Form</p>
		
		<div id="logo">
			<img class="logo" src="https://swe.umbc.edu/~ppratik1/is448/project/logo.png" alt= "logo"/>
			<p class="spacer"></p>
		</div>
		
		
		<div>
 <?php
 $ferror =$lerror=$eerror=$cerror="";
 if(isset($_POST["contact"]))
 {
	 $fname =$_POST["fname"];
	 $lname =$_POST["lname"];
	 $email =$_POST["email"];
	 $phone =$_POST["phone"];
	 $comments =$_POST["comments"];
	 
	 if(empty($fname))
	 {
	 $ferror ="First name is empty";
	 }
	  else if(empty($lname))
	 {
	 $lerror ="last name is empty";
	 }
	  else if(empty($email))
	 {
	 $eerror ="Email field is empty";
	 }
	  else if(empty($comments))
	 {
	 $cerror ="Please Provide Your comments";
	 }
	 else{
	 header("Location: https://swe.umbc.edu/~ppratik1/is448/project/thanks.html");
 
 
		}
 }
 
 ?>			
			<!--form-->
		  <form action="" id="form" method="post">
			<p class="error" id="firstname_error"> <?php 
				  echo $ferror;
				  ?>
				  </p>
			<label class="label">
				First Name * <br/>
				<input type="text" id="firstname" name="fname" autofocus/>
	 
			</label>
	
	
			<br/>
                <p class="error" id="lastname_error"><?php 
				  echo $lerror;
				  ?></p>  	
			<label  class="label">
				Last Name * <br/>
				<input type="text" id="lastname" name="lname"/>
  
			</label><br/>
			<p class="error" id="email_error"><?php 
				  echo $eerror;
				  ?></p>
			<label  class="label">
				Email * <br/>
				<input type="text" id="email" name="email"/>

			</label><br/>
			
			<label  class="label">
				Phone Number <br/>
				<input type="text" id="phone" name="phone"/>

			</label><br/>

            <p class="fields">Fields with * are required.</p>

<p class="error" id="phone_error"><?php 
				  echo $cerror;
				  ?></p>
     <textarea class="comment"  rows="10" cols="80" name="comments" placeholder="Your comments................"></textarea>
 <!--social media sites for facebook and twitter-->
 		<div class="connect_padding">
			<p class="connect"><a href="https://www.facebook.com" target="_blank"><img src="https://swe.umbc.edu/~ppratik1/is448/project/facebook.png" alt="facebook" /></a></p>
	 		<p class="connect"><a href="https://www.twitter.com" target="_blank"><img src="twitter.png" alt="https://swe.umbc.edu/~ppratik1/is448/project/facebook"/></a></p>
	
		</div>
	<!--submition of the form button-->
		<input class= "submit" type="submit"  value="Submit" name="contact"/>        
	

				
				
 </form>

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
