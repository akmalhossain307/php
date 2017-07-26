<?php 
//Swaping two numbers using three variables
$x=10;
$y=20;
echo"Before swaping,The value of x is:$x and value of y is:$y <br/> ";
$z=$x;
$x=$y;
$y=$z;
echo"After swaping,The value of x is:$x and value of y is:$y <br/> ";

//Swaping two numbers without using third variable
$m=10;
$n=20;

echo"Before swaping,The value of m is:$m and value of n is:$n <br/> ";
$m=$m+$n;
$n=$m-$n;
$m=$m-$n;
echo"After swaping,The value of m is:$m and value of n is:$n <br/> ";
?>