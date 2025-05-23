<!DOCTYPE html> 
<html> 
<head> 
<title>String Manipulation</title> 
</head> 
<body> 
<h2>String Manipulation</h2> 
<form method="post"> 
<label for="string">Enter a string:</label><br> 
<input type="text" id="string" name="string"><br><br> 
<input type="submit" name="get_length" value="Get Length"> 
<input type="submit" name="reverse" value="Reverse"> 
<input type="submit" name="uppercase" value="Uppercase"> 
<input type="submit" name="lowercase" value="Lowercase"> 
<input type="submit" name="replace" value="Replace"> 
<input type="submit" name="check_palindrome" value="Check Palindrome"> 
<input type="submit" name="shuffle" value="Shuffle"> 
<input type="submit" name="word_count" value="Word Count"> 
</form> 
<?php 
if(isset($_POST['get_length'])){ 
$string=$_POST['string']; 
echo"<p>Length of the string:".strlen($string)."</p>"; 
} 
if(isset($_POST['reverse'])){ 
$string=$_POST['string']; 
echo"<p>Reversed string:".strrev($string)."</p>"; 
} 
if(isset($_POST['uppercase'])){ 
$string=$_POST['string']; 
echo"<p>Uppercase string:".strtoupper($string)."</p>"; 
} 
if(isset($_POST['lowercase'])){ 
$string=$_POST['string']; 
echo"<p>Lowercase string:".strtolower($string)."</p>"; 
} 
if(isset($_POST['replace'])){ 
$string=$_POST['string']; 
$new_string=str_replace('a','x',$string); 
echo"<p>String after replacement:".$new_string."</p>"; 
} 
if(isset($_POST['check_palindrome'])){ 
$string=$_POST['string']; 
if(isset($_POST['get_length'])){ 
$string=$_POST['string']; 
echo"<p>Length of the string:".strlen($string)."</p>"; 
} 
if(isset($_POST['reverse'])){ 
$string=$_POST['string']; 
echo"<p>Reversed string:".strrev($string)."</p>"; 
} 
if(isset($_POST['uppercase'])){ 
$string=$_POST['string']; 
echo"<p>Uppercase string:".strtoupper($string)."</p>"; 
} 
if(isset($_POST['lowercase'])){ 
$string=$_POST['string']; 
echo"<p>Lowercase string:".strtolower($string)."</p>"; 
} 
if(isset($_POST['replace'])){ 
$string=$_POST['string']; 
$new_string=str_replace('a','x',$string); 
echo"<p>String after replacement:".$new_string."</p>"; 
} 
if(isset($_POST['check_palindrome'])){ 
$string=$_POST['string']; 

}if($string==strrev($string)){ 
echo"<p>The string is a palindrome.</p>"; 
}else{ 
echo"<p>The string is not a palindrome.</p>"; 
} 
} 
if(isset($_POST['shuffle'])){ 
$string=$_POST['string']; 
echo"<p>Shuffled string:".str_shuffle($string)."</p>"; 
} 
if(isset($_POST['word_count'])){ 
$string=$_POST['string']; 
echo"<p>Word count:".str_word_count($string)."</p>"; 
} 
?> 
</body> 
</html>