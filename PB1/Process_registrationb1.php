<!DOCTYPE html>
<html>
<head>
<title>Registration Details</title>
<style>
table {
border-collapse: collapse;
width: 50%; }
th, td {
border: 1px solid #dddddd;
text-align: left;
padding: 8px; }
</style>
</head>
<body>
<h2>Registration Details</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<table>";
echo "<tr><th>Field</th><th>Value</th></tr>";
$fields = array(
"First Name" => $_POST['first_name'],
"Last Name" => $_POST['last_name'],
"Address" => $_POST['address'],
"E-Mail" => $_POST['email'],
 "Mobile" => $_POST['mobile'],
"City" => $_POST['city'],
"State" => $_POST['state'],
"Gender" => $_POST['gender'],
"Hobbies" => isset($_POST['hobbies']) ?
implode(", ", $_POST['hobbies']) : "",
"Blood Group" => $_POST['blood_group']
);
foreach ($fields as $field => $value) {
echo
"<tr><td>$field</td><td>$value</td></tr>";
}
echo "</table>"; } ?>
</body>
</html>
