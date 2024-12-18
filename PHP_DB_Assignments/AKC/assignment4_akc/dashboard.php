<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>
	<style>
		td
		{
			border:2px solid black;
			width:370px;
			height: 370px;
			text-align: center;
			font-family: Verdana;
			font-size:30px;
		}
		table,tr,td,caption
		{
			margin-top: 50px;
		}
		h1
		{
			text-align: center;
			margin-top: 50px;
		}
		a
		{
			text-decoration: none;
			color: royalblue;
		}
		td:hover
		{
			background: lightcoral;
			color:indianred;
		}

	</style>
</head>
<body>
	<h1> Welcome to the Dashboard Page </h1>
	<table align="center">
		<caption style="font-size:20px; color:royalblue;"><b>Choose Your Option</b></caption>
		<tr>
			<td><a href="http://localhost/assignment4_akc/cust.php"> Insert new Employee </a></td>
			<td><a href="http://localhost/assign2/custlog.html"> Update Employee details</td> </a></td>
		</tr>
		<tr>
			<td><a href="http://localhost/assign2/menuinsert.php">Display all employees</td>
            <td><a href="http://localhost/assign2/menuinsert.php">Delete Employee</td>
		</tr>
	</table>
</body>
</html>

<?php



?>