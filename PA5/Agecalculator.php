<!DOCTYPE html> 
<html> 
<head> 
<title>Age Calculator</title> 
</head> 
<body> 
<h2>Age Calculator</h2> 
<form method="post"> 
<label for="birthdate">Enter your birth date:</label> &nbsp; 
<input type="date" id="birthdate" name="birthdate"> &nbsp; 
<input type="submit" name="calculate" value="Calculate Age"> 
</form> 
<?php 
function calculateAge($birthdate){ 
$birthDate=new DateTime($birthdate); 
$now=new DateTime(); 
$age=$now->diff($birthDate); 
return array( 
'years'=>$age->y, 
'months'=>$age->m, 
'days'=>$age->d
); 
} 
if(isset($_POST['calculate'])){ 
$birthdate=$_POST['birthdate']; 
$age=calculateAge($birthdate); 
echo"<h3>Your age is:</h3>"; 
echo"<p>Years:".$age['years']."</p>"; 
echo"<p>Months:".$age['months']."</p>"; 
echo"<p>Days:".$age['days']."</p>"; 
} 
?> 
</body> 
</html> 