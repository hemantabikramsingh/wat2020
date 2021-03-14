<?php

//This is my first php program
echo "Name: Hemanta Bikram Singh<br/>Student ID: 77227265";
echo "<br/><br/>";


echo "<h3> Using Escape Characters</h3>";
echo "\"most programmers say it’s better to use 'echo' rather than 'print'\" says who?";
echo "<br/><br/>";


echo "<h3>Variables</h3>";
$name = 'David';
$age = 12;
echo 'Hi my name is '. "$name". 'and i am '. "$age". 'years old';
echo "<br/>Mi nombre es $name y tengo $age anos de edad";
echo "<br/><br/>";


echo "<h3>Functions</h3>";
//gettype()returns the datatype of the variable
echo gettype($name);
echo '<br />';
//strlen() returns the length of given string
echo strlen($name);
echo '<br />';
//strtoUpper() returns string after converting each charaters to uppercase 
echo strtoUpper($name);
echo "<br/><br/>";


echo "<h3>Arithmetic</h3>";

$num1 = 9;
$num2 = 12;
$product = $num1*$num2;
$percentage= ($num1/$num2)*100;
$quotient = $num2/$num1;
$remainder = $num2 % $num1;

echo "num1 = $num1";
echo '<br/>';
echo "num2 = $num2";
echo '<br/>';
echo "num1 x num2 = $product";
echo '<br/>';
echo "num1 as a percentage of num2 = ".  number_format($percentage). "%";
echo '<br/>';
echo "num2 divided by num1 = ".  floor($quotient)." remainder $remainder";
echo "<br/><br/>";



$heightInMeter = 1.8;
$heightInInches = ($heightInMeter * 100 )/2.54;
$heightInFeet = floor($heightInInches/12);
$heightInInches = $heightInInches%12;

echo "Name: $name";
echo '<br/>';
echo "Age: $age";
echo '<br/>';
echo "Height in Meter: $heightInMeter";
echo '<br/>';
echo "Height in Feet and Inches: $heightInFeet"."ft $heightInInches"."ins";




?>