<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
	<link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Registration Form</h1>
    <form action="Activity4-preview.php" method="get">
      <label>Name:</label>
      <input type="text" name="name"><br><br>
      <label>Username:</label>
      <input type="text" name="username"><br><br>
      <label>Password:</label>
      <input type="password" name="password"><br><br>
      <label>Address:</label>
      <input type="text" name="address"><br><br>
      <label>Country:</label>
      <select name="countries">
        <option value="none">(Please select a country)</option>
        <option value="Turkey">Turkey</option>
        <option value="China ">China</option>
        <option value="Canada">Canada</option>
      </select><br><br>
      <label>ZIP Code:</label>
      <input type="text" name="zip"><br><br>
      <label>Email:</label>
      <input type="email" name="email"><br><br>
      <label>Sex:</label>
      <input type="radio" name="sex" value="male">Male
      <input type="radio" name="sex" value="female">Female<br><br>
      <label>Language:</label>
      English<input type="checkbox" name="languages[]" value="English">
      Turkish<input type="checkbox" name="languages[]" value="Turkish">
      French<input type="checkbox" name="languages[]" value="French"><br><br>
      <label>About:</label>
      <textarea name="about" cols="30" rows="5"></textarea><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>