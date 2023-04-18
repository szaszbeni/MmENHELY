<?php
session_start();
	include("connections.php");
	include("functions.php");

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			echo "Adjon meg néhány érvényes információt!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
		#text{
			height: ;
			border-radius: 5px;
			padding: 4px;
			border:solid thin #aaa;
			width: 97%;
		}

		#button{
			pedding:10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border:none;
		}

		#box{
			background-color: darkgreen;
			margin: auto;
			width: 300px;
			pedding:20px;
		}

	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 20px; margin: 10px; color: white;">Signup</div>
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" name="Signup"><br><br>

			<a href="login.php">Click to login</a><br><br>
		</form>
	</div>
</body>
</html>