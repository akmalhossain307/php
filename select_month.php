<form action="" method="post">

<?php 
$Months=array("January","February","March","April","May","Jun","July","August","September","October","November","December");
echo"<select name='months[]' multiple>";
foreach($Months as $month)
{
	echo"<option value='$month'>$month</option>";
}

echo"</select>";


?>
<input type="submit" name="submit" value="Show selected values"/>
</form>
<?php 
if(isset($_POST['submit']))
{
	echo"You have selected: <br />";
	$m=$_POST['months'];
	foreach($m as $mm)
	{
		echo"$mm <br />";
	}
	
}
?>