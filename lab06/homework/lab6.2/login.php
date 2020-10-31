<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<?php

		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$mydb = 'mydatabase';
		$table_name = 'users';
		$connect = new mysqli($server, $user, $pass, $mydb);

		if ($connect->connect_error){
			die("Connection failed: " . $connect->connect_error);
		} else {
			$username = $_POST["username"];
			$password = $_POST["password"];
			$sql = "SELECT * FROM $table_name WHERE user_name = '$username' AND password = '$password'";

			if ($result = $connect->query($sql)) {
				if ($result -> num_rows > 0) {
					print("Login Success!");
				} else {
					print("Login Failed!");
				}
			} else {
				die("Query=$sql failed");
			}
		}
		$connect->close();
	?>
</body>
</html>