<!DOCTYPE html>
<html>
<head>
<title>Matrix Operations</title>
<style>
table {
margin: 10px 0;
border-collapse: collapse;}
table, th, td {
border: 1px solid black; }
th, td {
padding: 5px; }
</style>
</head>
<body>
<h1>Matrix Operations</h1>
<form method="post" action="">
<label for="rows">Enter the number of rows:</label>
<input type="number" id="rows" name="rows" required><br>
<label for="columns">Enter the number of columns:</label>
<input type="number" id="columns" name="columns" required><br><br>
<input type="submit" name="generate" value="Generate Matrices"></form>
<?php
if (isset($_POST['generate'])) {
$rows = $_POST['rows'];
$columns = $_POST['columns'];
echo '<form method="post" action="">
<input type="hidden" name="rows" value="' . $rows . '">
<input type="hidden" name="columns" value="' . $columns . '">';
echo '<h2>Matrix A</h2>';
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
echo '<tr>';
for ($j = 0; $j < $columns; $j++) {
echo '<td><input type="number" name="a[' . $i . '][' . $j . ']"
required></td>'; }
echo '</tr>'; }
echo '</table>';
echo '<h2>Matrix B</h2>';
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
echo '<tr>';
for ($j = 0; $j < $columns; $j++) {
echo '<td><input type="number" name="b[' . $i . '][' . $j . ']"
required></td>'; }
echo '</tr>'; }
echo '</table>';
echo '<input type="submit" name="add" value="Add Matrices">';
echo '<input type="submit" name="subtract" value="Subtract Matrices">';
echo '<input type="submit" name="multiply" value="Multiply Matrices">';
echo '</form>';}
if (isset($_POST['add']) || isset($_POST['subtract']) ||
isset($_POST['multiply'])) {
$rows = $_POST['rows'];
$columns = $_POST['columns'];
$matrixA = $_POST['a'];
$matrixB = $_POST['b'];
if (isset($_POST['add'])) {
echo '<h2>Result of Addition</h2>';
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
echo '<tr>';
for ($j = 0; $j < $columns; $j++) {
$result = $matrixA[$i][$j] + $matrixB[$i][$j];
echo '<td>' . $result . '</td>'; }
echo '</tr>'; }
echo '</table>'; }
if (isset($_POST['subtract'])) {
echo '<h2>Result of Subtraction</h2>';
echo '<table>';
for ($i = 0; $i < $rows; $i++) {
echo '<tr>';
for ($j = 0; $j < $columns; $j++) {
$result = $matrixA[$i][$j] - $matrixB[$i][$j];
echo '<td>' . $result . '</td>'; }
echo '</tr>'; }
echo '</table>';}
if (isset($_POST['multiply'])) {
echo '<h2>Result of Multiplication</h2>';
if ($rows != $columns) {
echo 'Multiplication requires the number of columns in Matrix A to
be equal to the number of rows in Matrix B.';} else {
echo '<table>';
for ($i = 0; $i < $rows; $i++) { echo '<tr>';
for ($j = 0; $j < $columns; $j++) { $result = 0;
for ($k = 0; $k < $columns; $k++) {
$result += $matrixA[$i][$k] * $matrixB[$k][$j]; }
echo '<td>' . $result . '</td>'; }
echo '</tr>'; }
echo '</table>';} }}?>
</body>
</html>