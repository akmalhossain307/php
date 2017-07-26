<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3>For single Selection:</h3>
	
	<form action="" method="post">
	<input type="checkbox" name="check[]" value="Apple" />Apple
	<input type="checkbox" name="check[]" value="Banana" />Banana
	<input type="checkbox" name="check[]" value="Juice" />Juice
	<input type="checkbox" name="check[]" value="Mango" />Mango
	<input type="checkbox" name="check[]" value="Jackfruit" />Jackfruit
	<input type="checkbox" name="check[]" value="Others" />Others
	<input type="submit" name="submit" value="Check Now" />
	</form>
	<form action="" method="post">
	<input type="radio" name="check[]" value="Apple" />Apple
	<input type="radio" name="check[]" value="Banana" />Banana
	<input type="radio" name="check[]" value="Juice" />Juice
	<input type="radio" name="check[]" value="Mango" />Mango
	<input type="radio" name="check[]" value="Jackfruit" />Jackfruit
	<input type="radio" name="check[]" value="Others" />Others
	<input type="submit" name="sub" value="Check Now" />
	</form>
	
	
	<?php 
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['check']))
		{
			echo"You have selected: <br />";
			foreach($_POST['check'] as $selected)
			{
			echo$selected."<br />";	
				
			}
			
		}
		
	}
	?>
	<?php 
	if(isset($_POST['sub']))
	{
		if(!empty($_POST['check']))
		{
			echo"You have selected: <br />";
			foreach($_POST['check'] as $selected)
			{
			echo$selected."<br />";	
				
			}
			
		}
		
	}
	?>
	
</body>
</html>