<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
	<select name="division" id="">
		<option value="Dhaka">Dhaka</option>
		<option value="Rajshahi">Rajshahi</option>
		<option value="Rangpur">Rangpur</option>
		<option value="Sylhet">Sylhet</option>
		<option value="Chittagong">Chittagong</option>
		<option value="Barisal">Barisal</option>
		<option value="Khulna">Khunla</option>
		<option value="Mymensigh">Mymensigh</option>
		<input type="submit" name="submit" value="Select any division" />
	</select>
	</form>
	
	<?php 
	$division=array("Dhaka"=>array("D1"=>array("DU1","DU1","DU1","DU1"),"D2"=>array("DU2","DU2","DU2","DU2"),"D3"=>array("DU3","DU3","DU3","DU3"),"D4"=>array("DU4","DU4","DU4","DU4")));
	if(isset($_POST['submit']))
	{
		$get_division=$_POST['division'];
		foreach($division as $division_key=>$districts)
		{
			if($division_key==$get_division)
			{
				
				?>
				<form action="" method="post">
				
				
				<?php
				echo"<select name='district'>";
				foreach($districts as $district_key=>$upazilas)
				{
					
					echo"<option value='$district_key'>$district_key</option>";
					
					
				}
				echo"</select>";
				?>
				<input type="submit" name="sub" value="Select any district" />
				</form>
			
				
				
				<?php 
				if(isset($_POST['sub']))
				{
				$get_upazila=$_POST['district'];
				if($district_key==$get_upazila)
				{
					foreach($upazilas as $upazila)
					{
						
					
							echo"<select>";
							
							
						echo"<option>$upazila</option>";
						
							echo"</select>";
						
					}
					
				}
					
				}
				?>
				
				<?php 
			}
			
		}
		
	}
	?>
	
	
		
</body>
</html>