<?php 
include "config.php";

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Online Registration</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-git.js"></script>
	<script src="js/jquery-git-ui.js"></script>
	<style>
	#header{width:100%;height:70px;background:#8892BF;border-bottom:4px solid #4F5B93}
	h1{color:yellow;text-align:center;margin-top:0px;padding:10px}
	#body{width:100%;height:600px;background:#E4E4E4;}
	#registration{padding:12px;color:white;background:#673BB6;width:200px;}
	
	</style>
	
	
</head>
<body>
	<section id="header">
		<h1>Basic Registration/Login System</h1>
	</section>
	
	<br />
	<section id="body">
	
	<?php 
	if(isset($_GET['id']))
	{
	/*
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$address=$_POST['address'];
	$course=$_POST['course'];
	$contact=$_POST['contact'];
	$dob=$_POST['dob'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$image=$_FILES['image']['name'];
	$temp_image=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp_image,"upload/$image");
	
	$q="INSERT INTO trainee_reg (name,roll,image,address,course,contact,dob,username,password) VALUES ('$name','$roll','$image','$address','$course','$contact','$dob','$username','$password')";
	$r=mysqli_query($con,$q);
	if($r)
	{
	echo "<script>alert('Registration Successful');</script>" ;
	echo"<script>window.open('login.php','_SELF');</script>";

	}
	else
	{
	echo"Registration fail!";
	}
	
	
	}
	*/
	
	?>
	
	<?php 
		$getID=$_GET['id'];
		$trainee=mysqli_query($con,"SELECT * FROM trainee_reg WHERE id=$getID");
		if($trainee)
		{
			$i=0;
			while($result=mysqli_fetch_array($trainee))
			{
			
				
	?>
	
	<center>
	
	
		<table align="center" border="2">
		
			<tr>
				<td>Trainee Name:</td>
				<td><input type="text"name="name" value="<?php echo$result['name'];?>"/></td>
			</tr>
			
			<tr>
				<td>Roll:</td>
				<td><input type="text"name="roll" value="<?php echo$result['roll'];?>"/></td>
			</tr>
			<tr>
				<td>Picture:</td>
				<td><img src="upload/<?php echo$result['image'];?>" alt="" width="100" height="100"/></td>
			</tr>
			
			
			
			<tr>
				<td>Address:</td>
				<td><textarea name="address" cols="30" rows="10"><?php echo$result['address'];?></textarea></td>
			</tr>
			<tr>
				<td>Course:</td>
				<td><?php echo$result['course'];?></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><input type="text" name="contact" value="<?php echo$result['contact'];?>"/></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="text"name="dob" id="datepicker" value="<?php echo$result['dob'];?>"/></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text"name="username" value="<?php echo$result['username'];?>"/></td>
			</tr>
			
			
		</table>
			 
	
<a href="index.php">Home</a>
	</center>
	
	<?php 
	}
	}
	}
	?>
	
	
	</section>




	<section id="header">
		<h1>TMSS-Web Design and Development-Batch-03</h1>
	</section>
	
<script>
 
 $( function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true,
			showButtonPanel: true,
			yearRange: "1980:2017"
		});
	} );

</script>
       	
</body>
</html>