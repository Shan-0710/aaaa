<?php
class DistanceCalculator {
public $feet;
public $inches;
function __construct($feet, $inches) {
$this->feet = $feet;
$this->inches = $inches; }
function add($feet2, $inches2) {
$totalFeet = $this->feet + $feet2;
$totalInches = $this->inches + $inches2;
if ($totalInches >= 12) {
$totalFeet += floor($totalInches / 12); $totalInches %= 12; }
return array($totalFeet, $totalInches); }
function difference($feet2, $inches2) {
$totalFeet = $this->feet - $feet2;
$totalInches = $this->inches - $inches2;
if ($totalInches < 0) {
$totalFeet--; $totalInches += 12; }
return array(abs($totalFeet), abs($totalInches)); }}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$feet1 = $_POST["feet1"]; $inches1 = $_POST["inches1"];
$feet2 = $_POST["feet2"]; $inches2 = $_POST["inches2"];
$distance1 = new DistanceCalculator($feet1, $inches1);
$distance2 = new DistanceCalculator($feet2, $inches2);
$add_result = $distance1->add($feet2, $inches2);
$difference_result = $distance1->difference($feet2, $inches2);
echo "<h2>Results:</h2>";
echo "Sum: " . $add_result[0] . "' " . $add_result[1] . "\" <br>";
echo "Difference: " . $difference_result[0] . "' " . $difference_result[1] . "\"";}?>