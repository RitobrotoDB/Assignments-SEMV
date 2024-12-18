<!DOCTYPE html>
<html>
<head>
    <title>Employee Input Form</title>
</head>
<body>
    <h2>Enter Employee Details</h2>
    <form action="part_ii.php" method="post">
        <label for="empname">Employee Name:</label>
        <input type="text" id="empname" name="empname" required><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>
        <label for="pin">PIN Code:</label>
        <input type="text" id="pin" name="pin" required><br><br>
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        <label for="joindate">Joining Date:</label>
        <input type="date" id="joindate" name="joindate" required><br><br>
        <label for="deptid">Department:</label>
        <select id="deptid" name="deptid" required>
            <?php
            include 'connect.php';
            $sql = "SELECT deptid, dname FROM Department";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['deptid'] . "'>" . $row['dname'] . "</option>";
                }
            } else {
                echo "<option value=''>No departments found</option>";
            }
            $conn->close();
            ?>
        </select><br><br>
        <label for="basicpay">Basic Pay:</label> 
        <input type="number" id="basicpay" name="basicpay" required><br><br>
        <input type="submit" name="insert" value="Submit">
    </form>
</body>
</html>

<?php
include 'connect.php';
if (isset($_POST['insert']))
{
$empname = $_POST['empname']; 
$dob = $_POST['dob']; 
$city = $_POST['city']; 
$state = $_POST['state']; 
$pin = $_POST['pin']; 
$mobile = $_POST['mobile']; 
$joindate = $_POST['joindate']; 
$deptid = $_POST['deptid']; 
$basicpay = $_POST['basicpay']; 

$sql = "INSERT INTO Employee (empname, dob, city, state, pin, mobile, joindate, deptid) VALUES ('$empname', '$dob', '$city', '$state', '$pin', '$mobile', '$joindate', '$deptid')"; 

if ($conn->query($sql) === TRUE) 
{   $empid = $conn->insert_id; 
    $salary_sql = "INSERT INTO Salary (empid, BasicPay) VALUES ($empid, $basicpay)"; 

    if ($conn->query($salary_sql) === TRUE) 
    { echo "New record created successfully. Employee ID: " . $empid;
        header("refresh: 3; url = http://localhost/assignment3_akc/dashboard.html"); } 
    else 
    { echo "Error: " . $salary_sql . "<br>" . $conn->error; } 
} 
else 
{ echo "Error: " . $sql . "<br>" . $conn->error; } 
        
$conn->close();
}
?>
