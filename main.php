
<?php
session_start();

?>
<html>
<head>
<!--title of the page-->
<title>Easy Connection</title>

<!--link to css style sheet main file -->
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<style>
.color{color:white;}

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
$eusername=$epassword="";

	
?>

<?php
$error=$userError="";
 
  
	if(isset($_POST["log"]))
	{
		
			
		if (empty($_POST["type"]))
			{
				$userError = "User Type is required";
			} 
		else 
			{
				$user = $_POST["type"];
			}
			
			$eusername = $_POST['Eusername'];
			$epassword = $_POST ['Epassword'];
			
		if(empty($eusername) && empty($epassword))
			{
				$error="Input field is empty";
			
			}
		
		else
			{
	

			if(isset($user) && $user =="employer")
				{
	

						$_SESSION['Eusername'] = $eusername;

							$result1 = mysql_query("SELECT password FROM employer WHERE username = '".$eusername."'");
							$pw = mysql_fetch_array($result1);
							$result2 = mysql_query("SELECT username FROM employer WHERE password = '".$epassword."'");
							$un = mysql_fetch_array($result2);
			if(($un > 0) && ($pw > 0))
				{ 
               header("Location: https://swe.umbc.edu/~ppratik1/is448/project/noofapplicant.php"); 
				}
            else
            {
              $error ="Invalid Username or password!!" ;
				
            }
   

	}
else if(isset($user) && $user=="user")
{


$_SESSION['Eusername'] = $eusername;
	
	$result1 = mysql_query("SELECT password FROM user WHERE username = '".$eusername."'");
	$pw = mysql_fetch_array($result1);
    $result2 = mysql_query("SELECT username FROM user WHERE password = '".$epassword."'");
	$un = mysql_fetch_array($result2);
  if(($un > 0) && ($pw > 0))
            { 
               header("Location: https://swe.umbc.edu/~ppratik1/is448/project/applicantpage.php"); 
            }
            else
            {
              $error ="Invalid Username or password!!" ;
				
            }
   	
	
	
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
			<li class="home"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php">Home</a></li>
			
		</ul>
			<p class="spacer"></p>
	
			<hr/>
	</div>
<!--body content-->
	<div >
		
	<div class="login">


<div class="dropdown">
  <span>SIGN UP</span>
  <div class="dropdown-content">
    <p class="pa"><a href="https://swe.umbc.edu/~ppratik1/is448/project/employer.html">Employer Signup</a></p>
     <p class="pa"><a href="https://swe.umbc.edu/~ppratik1/is448/project/signup.html">User Signup</a></p>
  </div>
</div>
		
		<div id="logo">
			<img class="logo" src="https://swe.umbc.edu/~ppratik1/is448/project/logo.png" alt= "logo"/>
			<p class="spacer"></p>
		</div>
<div>
		<!--login information-->			
	
		<form action="" method="post">
			
			
			<label>
				<input type="text" name="Eusername" autofocus />
				<br/> User Name
			</label>
				<br/><br/>
				
			<label>
				<input type="password" name="Epassword"/>
			 <br/> Password
			</label><br/>
			
			<p class="color"><?php echo $error;?> </p>
			
			<label><input type="radio" name="type" value="employer"  /> 
			Employer 
			</label><br/>
			 
			<label>
				<input type="radio" name="type" value="user"/>
				Job Seeker
			</label><br/>
			<p class="color"><?php echo $userError;?> </p>
			<br/>
			
		  <!--social media sites for facebook and twitter-->
			<div class="connect_padding">
					<p class="connect"><a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="facebook" /></a></p>
					<p class="connect"><a href="https://www.twitter.com/" target="_blank"><img src="twitter.png" alt="facebook"/></a></p>
			
			</div>
			<input class= "submit" name="log" type="submit"  value="LOG IN"/>
      
</form>

		  
		  <p class="spacer"></p>
</div>

  <!--password reset button-->
	  <div class="forgot_password">
			<p class="forgot"><a href="https://swe.umbc.edu/~ppratik1/is448/project/resetpassword.html">Forgot Password</a> </p>	
	  </div>
				
	  </div>	
  </div>
</div>
<!--footer element-->
	<div class="footer">
		<hr/>
		<p class="border">Copyright ?2017 <img class="footer_img" src="https://swe.umbc.edu/~ppratik1/is448/project/gambar planet saturnus.png" alt="logo"/> Easy Connection. All rights reserved.</p>	
	</div>
	
	

</body>
</html>
