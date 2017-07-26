<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3>For single Selection:</h3>
	<form action="" method="post">
	<select name="country" id="">
	<option value="Bangladesh">Bangladesh</option>
	<option value="India">India</option>
	<option value="Pakistan">Pakistan</option>
	<option value="UK">UK</option>
	<option value="USA">USA</option>
	
	</select>
	<input type="submit"name="submit" value="Get Value" />
	</form>
	
	<?php 
	if(isset($_POST['submit']))
	{
		
	$get_value=$_POST['country'];
	echo"You have selected:$get_value ";
		
	}
	?>
	
	
	<h3>For Multiple Selection:</h3>
	<form action="" method="post">
	<select multiple name="country[]" id="">
	<option value="Bangladesh">Bangladesh</option>
	<option value="India">India</option>
	<option value="Pakistan">Pakistan</option>
	<option value="UK">UK</option>
	<option value="USA">USA</option>
	
	</select>
	<input type="submit"name="submit" value="Get Value" />
	</form>
	
	<?php 
	if(isset($_POST['submit']))
	{
		
	$get_country=$_POST['country'];
	echo"You have selected: <br /> ";
	foreach($get_country as $countries)
	{
		echo$countries."<br />";
		
	}
	
		
	}
	?>
	<?php 
	function myfunction()
	{
		$x=30;
		return $x;
	}
	echo myfunction();
	?>
</body>
</html>