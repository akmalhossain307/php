<?php
SESSION_START(); 
include "config.php";

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">

	
	<style>
	#header{width:100%;height:70px;background:#8892BF;border-bottom:4px solid #4F5B93}
	h1{color:yellow;text-align:center;margin-top:0px;padding:10px}
	#body{width:100%;height:600px;background:#E4E4E4;}
	
	</style>
	<title>Online Registration</title>
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-git.js"></script>
	<script src="js/jquery-git-ui.js"></script>
	
</head>
<body>
	<section id="header">
		<h1>Basic Registration/Login System</h1>
	</section>
	
	<section id="body">
	<?php 
	if(isset($_POST['submit']))
	{
	$uname=$_POST['username'];
	
	$password=$_POST['pass'];
	
	$q="SELECT * FROM trainee_reg WHERE username='$uname' AND password='$password'";
	$r=mysqli_query($con,$q);
	
	if(mysqli_num_rows($r)>0)
	{
	$_SESSION['username']=$uname;
	
	echo "<script>alert('Login Successful');</script>" ;
	echo"<script>window.open('index.php','_SELF');</script>";

	}
	else
	{
	echo"Username or password is incorrect";
	}
	
	
	}
	
	
	?>
	
	
	
	<center>
	<form action=""method="post">
		<table align="center">
			<tr>
				<td>Username:</td>
				<td><input type="text"name="username" /></td>
			</tr>
			
			<tr>
				<td>Password:</td>
				<td><input type="password"name="pass" /></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit"name="submit"value="Login" /></td>
			</tr>
		</table>
		</form>		 
	
	
	</center>
	
	
	
	
	</section>




	<section id="header">
		<h1>TMSS-Web Design and Development-Batch-02</h1>
	</section>

     	
</body>
</html>