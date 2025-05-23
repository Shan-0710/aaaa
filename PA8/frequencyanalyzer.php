<?php 
session_start();  
function analyzeString($input_string){ 
$input_string = strtolower($input_string); 
$words = str_word_count($input_string, 1); 
$word_counts = array_count_values($words); 
return $word_counts; 
} 
function displayWordFrequencies($word_counts){ 
echo "<h3>Word Frequencies:</h3>"; 
if(!empty($word_counts)){ 
foreach($word_counts as $word => $count){ 
echo "<p><strong>$word:</strong> $count times</p>"; 
}  
$most_used_word = ''; 
$least_used_word = ''; 
$max_count = 0; 
$min_count = PHP_INT_MAX; 
foreach($word_counts as $word => $count){ 
if($count > $max_count || ($count == $max_count && strlen($word) < 
strlen($most_used_word))){ 
$most_used_word = $word; 
$max_count = $count; 
} 
if($count < $min_count || ($count == $min_count && strlen($word) < 
strlen($least_used_word))){ 
$least_used_word = $word; 
$min_count = $count; 
} 
} 
echo "<p><strong>The most used word is:</strong> $most_used_word (used 
$max_count times)</p>"; 
echo "<p><strong>The least used word is:</strong> $least_used_word (used 
$min_count times)</p>"; 
} else { 
echo "<p>No words found in the input string</p>";
} 
} 
if(isset($_POST['analyze'])){ 
$input_string = $_POST['input_string']; 
if(!empty($input_string)){ 
$word_counts = analyzeString($input_string); 
$_SESSION['input_string'] = $input_string; 
$_SESSION['word_counts'] = $word_counts; 
displayWordFrequencies($word_counts); 
} else { 
echo "<p>Please enter a string to analyze and sort</p>"; 
} 
} 
if(isset($_POST['sort_asc']) || isset($_POST['sort_desc'])){ 
$input_string = isset($_SESSION['input_string']) ? $_SESSION['input_string'] : 
''; 
$word_counts = isset($_SESSION['word_counts']) ? 
$_SESSION['word_counts'] : []; 
if(!empty($input_string) && !empty($word_counts)){ 
if(isset($_POST['sort_asc'])){ 
asort($word_counts); 
} 
if(isset($_POST['sort_desc'])){ 
arsort($word_counts); 
} 
$_SESSION['word_counts'] = $word_counts; 
displayWordFrequencies($word_counts); 
} else { 
echo "<p>Please enter a string to analyze and sort</p>"; 
} 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Word Frequency Analyzer</title> 
</head> 
<body> 
<h2>Word Frequency Analyzer</h2> 
<form method="post"> 
<label for="input_string">Enter a string:</label><br> 
<input type="text" id="input_string" name="input_string" value="<?php echo 
isset($_SESSION['input_string']) ? $_SESSION['input_string'] : ''; ?>"><br><br>
<input type="submit" name="analyze" value="Analyze"> 
<input type="submit" name="sort_asc" value="Sort Ascending"> 
<input type="submit" name="sort_desc" value="Sort Descending"> 
</form> 
</body> 
</html> 
