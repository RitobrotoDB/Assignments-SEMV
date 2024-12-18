<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Employee Login</h2>
    <form action="part_iii.php" method="post">
        <label for="empid">Employee ID:</label>
        <input type="text" id="empid" name="empid" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['login']))
{
$empid = $_POST['empid'];
$password = $_POST['password'];

$sql = "SELECT * FROM LOGIN WHERE empid='$empid' AND paswd='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful. Employee authenticated"; 
} else {
    echo "Invalid employee ID or password";
}
header("refresh: 3; url = http://localhost/assignment3_akc/dashboard.html");
$conn->close();}
?>
