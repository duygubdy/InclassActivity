<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Preview</title>
</head>
<body>
	<h1>Preview</h1>
	<?php
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$zip = $_POST['zip'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$languages = $_POST['language'];
		$about = $_POST['about'];

		echo "<p><strong>Name:</strong> $name</p>";
		echo "<p><strong>Username:</strong> $username</p>";
		echo "<p><strong>Password:</strong> $password</p>";
		echo "<p><strong>Address:</strong> $address</p>";
		echo "<p><strong>Country:</strong> $country</p>";
		echo "<p><strong>ZIP Code:</strong> $zip</p>";
		echo "<p><strong>Email:</strong> $email</p>";
		echo "<p><strong>Gender:</strong> $gender</p>";
		echo "<p><strong>Languages:</strong> " . implode(", ", $languages) . "</p>";
		echo "<p><strong>About:</strong> $about</p>";
	?>
</body>
</html>