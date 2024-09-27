<!DOCTYPE html>
<html>
<head>Login form</head>

<body>

<form method="post" action="login.php">

	<label for="name">Username :</label>
	<input type="text" name="name">

	<label for="password">Password :</label>
	<input type="password" name="password">

	<input type="submit" name="insert">
</form>

<br>

<a href="loginform.php"><p>Register</p></a>

<?php
	if(isset($_POST['insert']))
	{
		$username = $_POST["name"];
		$password = $_POST["password"];
		if(!empty($username))
		{
			if(!empty($password))
			{
				$usr = "root";
				$pwd ="";
				$dbname = "assignment1_akc";
				
				$connect = new mysqli("localhost", $usr, $pwd, $dbname);
				if(!$connect)
				{
					die("Cannot Connect");
				}
				else
				{
					echo "Connection Successful"."<br><br>";
				}
				
				$sql = "select `NAME` from `login` where `NAME` = '$username' and `password` = '$password';";
				if(($result=$connect->query($sql))==TRUE)
				{
					if($result->num_rows == 1)
					{
						//ob_start();
						header('Location: http://localhost/assignment1AKC/dash.html');
						//ob_end_flush();
						die();
					
					}
					else
					{
						header('Location: http://localhost/Assignment1/error.html');
					}
			}
		}
	}
	}
?>


</body>