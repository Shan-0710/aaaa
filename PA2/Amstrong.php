<!DOCTYPE html> 
<html> 
<head> 
<title>Armstrong Number Checker</title> 
<style> 
.blue-textbox{ 
width:200px; 
height:10px; 
padding:5px; 
background-color:#e8f0fe; 
color:black; 
font-size:16px; 
} 
</style> 
</head> 
<body> 
<h2>Armstrong Number Checker</h2> 
<form action=" " method="post"> 
    <label for="number">Enter a number:</label> 
<input type="text" id="number" name="number" class="blue-textbox" 
placeholder="TEXT INPUT"> 
<input type="submit" name="check" value="Check"> 
</form> 
<?php 
function isArmstrong($num){ 
$sum = 0; 
$temp = $num; 
$num_digits = strlen($num); 
while ($temp!= 0){ 
$digit = $temp % 10; 
$sum += pow($digit, $num_digits); 
$temp = intval($temp / 10); 
} 
return $sum == $num; 
} 
if(isset($_POST['check'])){ 
$number = $_POST['number']; 
if(ctype_digit($number) && $number>0){ 
if(isArmstrong($number)){ 
echo "<h3>$number is an Armstrong number.</h3>"; 
echo "<p>Numbers from 1 to $number that are Armstrong numbers:</p>";
for($i = 1; $i <=$number; $i++){ 
if(isArmstrong($i)){ 
echo "$i "; 
} 
} 
}else{ 
echo "<h3>$number is not an Armstrong number.</h3>"; 
} 
}else{ 
echo"<h3>Please enter a valid positive number.</h3>"; 
} 
} 
?> 
</body> 
</html>