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
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if ($result && mysqli_num_rows($result) > 0) 
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "Rosz jelszot adtal meg!";
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
	<title>login</title>
</head>
<body>

	<style type="text/css">
		body{
			background-image: url('login_hatter.jpg');
		}

		#text{
			height: ;
			border-radius: 5px;
			padding: 4px;
			border:solid thin #aaa;
			width: 90%;
			margin-top: 5%;
			margin-left: 10px;
		}

		#button{
			margin-left: 40%;
			pedding:10px;
			width: 70px;
			height: 30px;
			color: white;
			background-color: skyblue;
			border:none;
		}

		#box{
			margin-left: 41%;
			margin-top: 13%;
			background-color: #005b03;
			height: 450px;			
			width: 350px;
			pedding:20px;
		}
		p{
			color: white;
			font-size: 20px;
		}


	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 30px; margin-left: 38%; color: white;">Login</div>
			<p>username:</p> 
			<input id="text" type="text" name="user_name"><br>
			<p>password:</p> 
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" name="login"><br><br>

			<a href="signup.php">Click to signup</a><br><br>
		</form>
	</div>
</body>
</html>