<?php
// Configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dashboard';

// Create connection
$connfig= new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($connfig->connect_error) {
  die("Connection failed: ". $connfig->connect_error);
}

// Get the form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// Insert the data into the database
$sql = "INSERT INTO users (firstname, middlename, lastname, birthdate, username, password) VALUES ('$firstname', '$middlename', '$lastname', '$birthdate', '$username', '$passwordHash')";

if ($connfig->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: ". $sql. "<br>". $connfig->error;
}

$connfig->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Examination</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="styles/signup.css"/>
</head>
<body>
<div class="signup-form">
	<h1>Sign up</h1>
	<form action="php/signup.php" method="POST">
  <div class="container">
	<input type="text" placeholder="First name" name="firstname" required>
    <input type="text" placeholder="Middle name" name="middlename" required>
    <input type="text" placeholder="Last name" name="lastname" required>
    <label>Birthday</label>
    <input type="date" placeholder="Birthday"name="birthdate" required>
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="New Password" name="password" required>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>
</div>
<script src="js/signup.js" ></script>


</body>
</html>
	