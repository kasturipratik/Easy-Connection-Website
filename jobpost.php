<?php
session_start();

?>
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Job Post</title>
	
	<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/applicantpage.css" type="text/css"/>

<style>
input[type="submit"]
 {
    
    background-color: #4CAF50;
   
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:16px;
	color:black;
	font-weight:bold;

	
	
	
}

.submit{
margin-left:00px;}

/*the hover property for the submit button*/
input[type=button]:hover {
    background-color: #45a049;
}
.list{
	
	
	width:500px;
	margin-left:auto;
	margin-right:auto;
}
 #right{
	
	margin-left:300px;;
}
select{
	background-color:#736263;
		border-radius: 25px;
	height:26px;
	width: auto;
	border:none;
	color:white;
	padding-left:5px;
	font-size:16px;
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
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/contact.html">Contact</a></li>
			<li class="menu"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php">Home</a></li>
		</ul>
		<p class="spacer"></p>
	
	<hr/>
	</div>
<div >
		
	<div class="form">
	<p class="color"> <?php echo "Welcome "." ".ucfirst($name);?>
	
	<span id="right"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php"><input  type="submit" value="LOG OUT" name ="out" class="button"/></a>
	</p>
		<div id="logo">
		<p class="apply">JOB POSTING  </p>
				
		
		<p class="spacer"></p>
		</div>
<form action="" method="post">			
<div class="list">

<?php
$error="";
if(isset($_POST["submit"]))
{
	$title =$_POST["title"];
	$post =$_POST["post"];
	$shift =$_POST["shift"];
	$zip = $_POST["zip"];
	
	
	if((empty($post)) || (empty($title))|| $shift=="" ||(empty($zip)))
	{
		$error = "Please input the field properly";
		
	}
	else
	{
		if(preg_match("/^[0-9]{5}?$/i",$zip))
			{
		
	$error="THE JOB IS POSTED";
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
	



	#construct a query
	#query should look like this: 
	#select * from cars where car_name='corvette'
	$Q1 = "INSERT INTO posts (username,B_name, title, post, shift,zipcode)Values ('$username','$name','$title','$post','$shift','$zip')";
	
						  

	#Execute query
	$result = mysql_query($Q1);
	


	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysql_error();
		print "<p> . $error . </p>";
		exit;
	}

	
		
	}
	else
	{
		$error ="Invalid Zip Code";
	}
}
}


?>


<p class="color"><?php echo $error; ?></p>
	<label class="left ">
Job Title<br/><input type="text" name="title" /><br/>

	</label>
	<br/>
	<br/><br/>
<label class="left">
Job Description<br/><textarea class="comment"  rows="15" cols="50"  id="post" name="post" placeholder="Details .................."></textarea> <br/>
		</label>
	<label class="left">
	Zip Code<br/><input type="text" name="zip"/>
	</label>
<br/>

<label class="left">
Shift Time<br/>
<select name="shift">
<option value="">Select<option>
<option value="Negotiable">Any<option>
<option value="Day Shift">Day Shift<option>
<option value="Night Shift">Night Shift<option>
<option value="Morning Shift">Morning Shift<option>
<option value="Weekend Shift">Weekend Shift<option>
<option value="WeekDay Shift">weekday Shift<option>
</select>
<br/>
		</label>
		<br/>
	
	<p class="clearboth"></p>
	
	
	<br/>
<div class="submit">
<input class= "text" type="submit"  value="POST" name="submit"/>         
</div>
<p class="clearboth"></p>
<hr/>
</div>
	</form>
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


 

</body>
</html>