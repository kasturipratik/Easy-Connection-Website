<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Applicants Page</title>

 
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/main.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/applicantpage.css" type="text/css"/>
<link rel="stylesheet" href="https://swe.umbc.edu/~ppratik1/is448/project/applicant.css" type="text/css"/>


</head>
<body >


<?php
	#connect to mysql database
	$db = mysql_connect("studentdb-maria.gl.umbc.edu","dulkabi1","Umbckabin1");

	if(!$db)
		exit("Error - could not connect to MySQL");

	#select database sampath
	$er = mysql_select_db("dulkabi1");
	if(!$er)
		exit("Error - could not select cars database");
	
	$name= $lname = $ph_number= $email="";
	
	$username = $_SESSION['Eusername'];	
	
	$fname = mysql_query("SELECT * FROM user WHERE username = '$username'");

	
	$b = "firstname";
	$l ="lastname";
	$p ="ph_number";
	$e ="email";
	
	while($a = mysql_fetch_array($fname))
	{
		$name =$a[$b];
		$lname = $a[$l];
		$ph_number =$a[$p];
		$email =$a[$e];
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

	<div class="form">
	<p class="color">
	<?php echo "Welcome"." ".ucfirst($name);
	
	
	?> <span id="right"><a href="https://swe.umbc.edu/~ppratik1/is448/project/main.php"><input  type="submit" value="LOG OUT" name ="out" class="submit"/></a>
	
	
	</span></p>
	
	
		<div id="logo">
		<p class="apply">Job Search and Apply </p>
				
		
		<p class="spacer"></p>
		</div>
					<div class="form">
			
		  <form action="" method="post">

<div>
	<label class="left">
ZIPCODE <br/><input type="text" id="city" name="search"/><br/>

	</label>
	

	
<label class="left">
<input  type="submit"  value="Search"  class= "text1"/>
</label>
<label class="right">
<input class= "text1" type="submit"  value="Search All Posted Jobs"/>
</label>
<p class="clearboth"></p>
</div>
<hr/>




			
				<?php
$search_error = $noresult = $employeer_username="";

			$thanks ="";
		$rows="";

if(isset($_POST["search"]))
{
	$search = $_POST["search"];
	if(empty($search))
	{
		$search_error = "Please provide a valid zipcode";
		
	}
	else{
	
	$search_job = mysql_query("SELECT * FROM posts WHERE zipcode = '$search'");
	$rows = mysql_num_rows($search_job);	
	
	$p = "post_id";
	$t = "title";
	$po ="post";
	$z ="zipcode";
	$s ="shift";
	$b ="B_name";
	$d= "dateposted";

	
	while($array = mysql_fetch_array($search_job))
	{
		
	
		if($array == 0)
		{
			$noresult = "No Jobs Found";
			
		}
			else
		{
			print ("<table class='color'>
	<tr>
			<th class='th'>
			JOB ID
			</th>
			<th class='th'>
			BUSINESS
			</th>
			<th class='th'>
			JOB TITLE
			</th>
			<th class='th'>
			JOB SHIFT
			</th >
			<th class='th'>
			JOB LOCATION
			</th>
			<th class='th'>
			DATE POSTED
			</th>
	</tr>");
				
			print "<tr>";
			print 	("<td class='th'>$array[$p]</td>
			<td class='th'>$array[$b]</td> 
				<td class='th'>$array[$t]</td> 
				<td class='th'>$array[$s]</td>
				<td class='th'>$array[$z]</td>
				<td class='th'>$array[$d]</td>
			<td ><input  type='submit' value='Apply' name='apply' class='submit'/></td>
				
				");
			print "</tr> </table>";
				
	
		}
		
		
		
		
	}
	
			
			
			

}}




?>

<?php

if(isset($_POST["apply"]))
	{
		header ("Location:  https://swe.umbc.edu/~ppratik1/is448/project/apply.php");

	
	}


?>	
	<p class="colors">
<?php

echo $search_error;
echo $noresult;

?>
</p>
				
				



<!--social media sites for facebook and twitter-->
 	<div class="socialmedia">
			
			<p class="smedia"><a href="https://www.facebook.com/" target="_blank"><img src="facebook.png" alt="facebook" /></a></p>
	 		<p class="smedia"><a href="https://www.twitter.com/" target="_blank"><img src="twitter.png" alt="facebook"/></a></p>
	
	</div>
			
	
			
		  </form>
		  <p class="spacer"></p>
	
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
