<?php
//create

require 'connfig.php';

function createUser($username, $password) {
    global $connfig;
	$username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES ( , ?)";
    if($connfig->query($sql))
	{
		echo"inserted successfully";
	}
	else{
		echo"error:".$connfig->error;
	}
$connfig->close();	
}

//read data

function readUser($id) {
    global $connfig;
    $sql = "SELECT * FROM users WHERE id = '$id'";
	$result=$connfig->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()){
		
		echo $row["ID"]. " – " . $row["Name"] . "<BR />";
		}
		}
		else
		{
		echo "no results";
		}
		$con->close();
}

//update

function updateUser($id, $username, $password) {
    global $connfig;
    $sql = "UPDATE users SET username = ' $username', password = '$password' WHERE id = '$id'";
    if($connfig->query($sql))
	{
		echo"update successfully";
	}
	else{
		echo"error:".$connfig->error;
	}
$connfig->close();	
}

//delete


function deleteUser($id) {
    global $connfig;
    $sql = "DELETE FROM users WHERE $password = '$password'";
    if($connfig->query($sql))
	{
		echo"deleted successfully<br/>";
	}
	else{
		echo"error:".$connfig->error;
	}
$connfig->close();	
}

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Examination</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="styles/login.css" />
	
</head>
<body>
<div class="container">
	<div class="box form-box">
		<header>LOGIN</header>
		<form action="login.php" method="POST">
			<div class="imgcontainer">
				<img src="images/user.jpg" alt="Avatar" class="avatar">
			  </div>
			<div class="field input">
				<label for="username">Username</label>
				<input type="text" name="username" id="username"  required>
			</div>
			<div class="field input">
				<label for="password">Password</label>
				<input type="password" name="password" id="password"  required>
			</div>
			<div class="field">
				<input type="submit" class="btn" name="submit" value="LOGIN"  required>
			</div>
			<div class="links">
				Don't have account?  <a href="signup.html">Sign Up Now</a>
			</div>
		</form>
	</div>
</div>

<script src="js/myscript.js" ></script>
</body>
</html>