<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="Activity4.css">
</head>
<body>
	<h1>Registration Form</h1>
	<form action="submit.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<label for="address">Address:</label>
		<textarea id="address" name="address" required></textarea><br>

		<label for="country">Country:</label>
		<select id="country" name="country">
			<option value="usa">USA</option>
			<option value="canada">Canada</option>
			<option value="mexico">Mexico</option>
		</select><br>

		<label for="zip">ZIP Code:</label>
		<input type="text" id="zip" name="zip" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label>Sex:</label>
		<label for="male">Male</label>
		<input type="radio" id="male" name="gender" value="male" required>
		<label for="female">Female</label>
		<input type="radio" id="female" name="gender" value="female"><br>

		<label for="language">Language:</label>
		<input type="checkbox" id="english" name="language[]" value="english">
		<label for="english">English</label>
		<input type="checkbox" id="spanish" name="language[]" value="spanish">
		<label for="spanish">Spanish</label>
		<input type="checkbox" id="french" name="language[]" value="french">
		<label for="french">French</label><br>

		<label for="about">About:</label>
		<textarea id="about" name="about"></textarea><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>