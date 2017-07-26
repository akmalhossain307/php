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
	
	<section id="body">
	
	
	
	<center>
	<h3 id="registration">Trainee Info</h3>
	<table border="2">
		<tr>
			<th>SL No.</th>
			<th>Trainee Name</th>
			<th>Trainee Picture</th>
			<th>Action</th>
			
		</tr>
		<?php 
		$trainee=mysqli_query($con,"SELECT * FROM trainee_reg");
		if($trainee)
		{
			$i=0;
			while($result=mysqli_fetch_array($trainee))
			{
				$i++;
				
				?>
				
		
		<tr>
			<td><?php echo$i;?></td>
			<td><?php echo$result['name'];?></td>
			<td><img src="upload/<?php echo$result['image'];?>" alt="" width="100" height="100"/></td>
			<td><a href="view.php?id=<?php echo$result['id'];?>"><img src="images/show.png" alt="" width="60" height="40"/></a> | <a href="edit.php?id=<?php echo$result['id'];?>"><img src="images/edit.jpg" alt="" width="60" height="40"/> </a> | <a href="delete.php?id=<?php echo$result['id'];?>"><img src="images/delete.png" alt="" width="60" height="40"/></a></td>
			
		</tr>
		<?php 
			}
		}
		?>
	</table>
	
	</center>
	
	
	
	
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