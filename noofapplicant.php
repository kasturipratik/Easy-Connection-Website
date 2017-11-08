
<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Of Applicants</title>

<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/employer.css" type="text/css"/>

<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<style>
input[type=button] {
    
    background-color: #4CAF50;
   
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:16px;
	color:black;
	font-weight:bold;
	margin:30px;
	
	
	
}
 #right{
	
	margin-left:300px;;
}
.submit {
    
    background-color: #4CAF50;
   

    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:20px;
	color:black;
	font-weight:bold;
	
	
}


/*the hover property for the submit button*/
.submit:hover {
    background-color: #45a049;
}
.submit{
text-align: center;}

/*the hover property for the submit button*/
input[type=button]:hover {
    background-color: #45a049;
}
.color{color:white;
text-align:center;
font-size:20px;
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
	
	$name="";
	$username=$_SESSION['Eusername'];	

	$fname = mysql_query("SELECT B_name FROM employer WHERE username = '$username'");

	$b = "B_name";
	while($a = mysql_fetch_array($fname))
	{
		$name =$a[$b];
		
	}
		
?>

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
		
	<div >
	<p class="color">
	
	<?php echo "Welcome"." ".ucfirst($name);?>
	<span id="right"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php"><input  type="submit" value="LOG OUT" name ="out" class="submit"/></a>
	</p>
	


	<div id="logo">
					<p class="empsignup">List Of Applicants</p>
				
		
		<p class="spacer"></p>
		</div>
					<div>
			
		  <form action="#">
<div>
<label>
<a href="https://swe.umbc.edu/~ppratik1/is448/project/jobpost.php"><input class="text" type="button"  value="Post Job"/></a>      
</label>
<label>

<input class= "text"  type="button"  value="View Applicant"/>   
</label>
<br/>
<br/>
</div>

<div>

	<label class="left">
First Name <br/><input type="text" /><br/>

	</label>
<label class="left">
Last Name<br/><input type="text" /> <br/>
		</label>
	

<label class="left">
Phone Number <br/><input type="text" /><br/>

	</label>
<label class="left">
Location<br/><input type="text" /> <br/>
		</label>
	
	<p class="spacer"></p>
	</div>
      




  <!--social media sites for facebook and twitter-->
 	<div class="socialmedia">
			
			<p class="smedia"><a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="facebook" /></a></p>
	 		<p class="smedia"><a href="https://www.twitter.com/" target="_blank"><img src="twitter.png" alt="facebook"/></a></p>
	
	</div>
			  <p class="spacer"></p>
		  </form>
		
		</div>
		
		
  </div>
  
	</div>
	
	</div>
<div class="footer">
<hr/>
<p class="border">Copyright © 2017 <img class="footer_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="src"/> Easy Connection. All rights reserved.</p>	
</div>

</body>
</html>
