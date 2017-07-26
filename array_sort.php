
<?php 
/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

*/
		$name=array("Ratan","Alal","Shaon","Faysol","Hasan");
		rsort($name);
		for($i=0;$i<count($name);$i++)
		{
			echo$name[$i]."<br />";
		}
		$Employee_name=array("Ratan"=>30,"Alal"=>23,"Shaon"=>32,"Faysol"=>25,"Hasan"=>26);
		krsort($Employee_name);
		foreach($Employee_name as $name=>$age)
		{
			echo"Name".$name." and Age: $age <br />";
		}




		$trainee=array(20,43,15,27,40,32,50,20,100,125,110);
			$a=0;
			foreach($trainee as $key=>$val)
			{
			if($val>$a)
			{
			$a=$val;
			
			}
			
			}
			echo"The highest value is: $a<br/>";
			
			echo"<br />";
			//Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.	
		
		$record=array(40,32,24,33,12,54,65,35,66,76);
		$sum=0;
		echo"Records Are:<br/>";
		for($i=0;$i<count($record);$i++)
		{
		echo$record[$i].",";
		$sum=$sum+$record[$i];
		
		}
		echo"<br/>";
		echo"The sum of total records is:".$sum."<br/>";
		$av=$sum/count($record);
		echo"The average is:$av<br/>";
		rsort($record);
		echo"The Highest five records are:<br/>";
		for($i=0;$i<5;$i++)
		{
		echo$record[$i].",";
		
		}
		echo"<br/>";
		sort($record);
		echo"The Lowest five records are:<br/>";
		for($i=0;$i<5;$i++)
		{
		echo$record[$i].",";
		
		}
		
		
		
		//Write a PHP script to calculate and display average Marks, five lowest and highest Marks.
		echo"<br/>";
		$Marks=array(55,33,78,98,72,66,51,69,84,74);
		$sum=0;
		echo"Marks are: ";
		for($i=0;$i<count($Marks);$i++)
		{
		echo$Marks[$i]." ";	
		$sum=$sum+$Marks[$i];
			
		}
		echo"<br />";
		echo"Total Marks is: $sum <br />";
		$avg=$sum/count($Marks);
		echo"Average Mark is: $avg <br />";
		echo"Five highest Marks are: <br />";
		rsort($Marks);
		for($i=0;$i<5;$i++)
		{
		echo$Marks[$i]." ";	
			
		}
		echo"<br />";
		echo"Five Lowest Marks are: <br />";
		sort($Marks);
		for($i=0;$i<5;$i++)
		{
		echo$Marks[$i]." ";	
			
		}
		echo"Records Are:";
		echo"<br />";
		$records=array(40,32,24,33,12,54,65,35,66,76);
		$rec=array_rand($records,10);
		echo$records[$rec[0]]."<br />";
		echo$records[$rec[1]]."<br />";
		echo$records[$rec[2]]."<br />";
		echo$records[$rec[3]]."<br />";
		echo$records[$rec[4]]."<br />";
		echo$records[$rec[5]]."<br />";
		echo$records[$rec[6]]."<br />";
		echo$records[$rec[7]]."<br />";
		echo$records[$rec[8]]."<br />";
		echo$records[$rec[9]];
		
		
		$rr=array("akmal hossain"=>24,"alal"=>23);
		echo"<br />".$rr['alal'];
		
			?>