<?php
for($i=6;$i>=1;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
		echo"*";
	}
	echo"<br/>";
}
 
 
 // for factorials calculation
 
 $fact=1;
 for($f=1;$f<=4;$f++)
 {
	 $fact=$fact*$f;
	 
 }
 echo"<br/>The factorial is:".$fact;
 
 
 echo"<br />";
 
 $str=explode(" ","Amar sonar bangla ami tomay valobashi");
echo implode(',',$str);

?>

