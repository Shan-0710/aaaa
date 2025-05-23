<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
</head>
<body>
<h2>Student Registration Form</h2>
<form method="post" action="process_registrationb1.php">
<label for="first_name">First Name:</label><br>
<input type="text" id="first_name" name="first_name" required><br><br>
<label for="last_name">Last Name:</label><br>
<input type="text" id="last_name" name="last_name" required><br><br>
<label for="address">Address:</label><br>
<textarea id="address" name="address" required></textarea><br><br>
<label for="email">E-Mail:</label><br>
<input type="email" id="email" name="email" required><br><br>
<label for="mobile">Mobile:</label><br>
<input type="text" id="mobile" name="mobile" required><br><br>
<label for="city">City:</label><br>
<input type="text" id="city" name="city" required><br><br>
<label for="state">State:</label><br>
<input type="text" id="state" name="state" required><br><br>
<label>Gender:</label><br>
<input type="radio" id="male" name="gender" value="Male" required>
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender"value="Female" required>
<label for="female">Female</label><br><br>
<label>Hobbies:</label><br>
<input type="checkbox" id="hobby1" name="hobbies[]" value="Reading">
<label for="hobby1">Reading</label><br>
<input type="checkbox" id="hobby2" name="hobbies[]" value="Sports">
<label for="hobby2">Sports</label><br>
<input type="checkbox" id="hobby3" name="hobbies[]" value="Music">
<label for="hobby3">Music</label><br><br>
<label for="blood_group">Blood Group:</label><br>
<select id="blood_group" name="blood_group" required>
<option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>