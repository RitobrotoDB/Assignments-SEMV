<!DOCTYPE html>
<html>
<head>Login form</head>

<body>

<form method="post" action="loginform.php">

	<label for="name">Name :</label>
	<input type="text" name="name">
	<br><br>
	<label for="city">City :</label>
	<input type="text" name="city">
	<br><br>
	<label for="email">Email :</label>
	<input type="email" name="email">
	<br><br>
	<label for="date">Date of Birth :</label>
	<input type="date" name="date">
	<br><br>
	<label for="roll">Roll :</label>
	<input type="text" name="roll">
<br><br>
	<input type="submit" name="insert" value="Insert">
	<input type="submit" name="update" value="Update">
	<input type="submit" name="delete" value="Delete">
</form>

<?php
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

	if(isset($_POST['insert']))
	{
		$name = $_POST["name"];
		$city = $_POST["city"];
		$email = $_POST["email"];
		$dob=$_POST["date"];
		$roll = $_POST["roll"];
		if(!empty($name) &&
		!empty($city) &&
		!empty($email) &&
		!empty($dob) &&
		!empty($roll)
		)
		{

				
				$sql = "INSERT INTO `student`(`ROLL`, `NAME`, `CITY`, `EMAIL`, `DOB`) VALUES ('$roll','$name','$city','$email','$dob')";
				if(($result=$connect->query($sql))==TRUE)
				{
					
						//ob_start();
						echo "Inserted<br>";
						//ob_end_flush();
						die();
					
				}	
					else
					{
						header('Location: http://localhost/assignment1AKC/error.html');
					}
				
		
		}
	}
	
	if (isset($_POST['update'])) {
    $name = $_POST["name"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $dob = $_POST["date"];
    $roll = $_POST["roll"];

    if (!empty($name) && !empty($city) && !empty($email) && !empty($dob) && !empty($roll)) {
        $sql = "UPDATE `student` SET `NAME` = '$name', `CITY` = '$city', `EMAIL` = '$email', `DOB` = '$dob' WHERE `ROLL` = '$roll'";
        if ($connect->query($sql) === TRUE) {
            echo "Updated<br>";
        } else {
            header('Location: http://localhost/assignment1AKC/error.html');
        }
    }
}

if (isset($_POST['delete'])) {
    $name = $_POST["name"];
    
    if (!empty($name)) {
        $sql = "DELETE FROM `student` WHERE `NAME` = '$name'";
        if ($connect->query($sql) === TRUE) {
            echo "Deleted<br>";
        } else {
            header('Location: http://localhost/assignment1AKC/error.html');
        }
    }
}

?>

</body>