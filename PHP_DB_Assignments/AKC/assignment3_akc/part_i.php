<!DOCTYPE html>
<html>
<head>
    <title>Salary Input Form</title>
</head>
<body>
    <h2>Enter Salary Details</h2>
    <form action="part_i.php" method="post">
        <label for="empid">Select Employee ID:</label>
        <select id="empid" name="empid" required>
            <?php
            include 'connect.php';

            $sql = "SELECT empid, empname FROM employee";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['empid'] . "'>" . $row['empid'] . " - " . $row['empname'] . "</option>";
                }
            } else {
                echo "<option value=''>No employees found</option>";
            }

            $conn->close();
            ?>
        </select><br><br>
        <label for="hra">HRA Percentage:</label>
        <input type="number" id="hra" name="hra" required><br><br>
        <label for="da">DA Percentage:</label>
        <input type="number" id="da" name="da" required><br><br>
        <label for="tax">Professional Tax:</label>
        <input type="number" id="tax" name="tax" required><br><br>
        <input type="submit" name="insert" value="Submit">
    </form>
</body>
</html>

<?php
include 'connect.php';
if(isset($_POST['insert']))
{
$empid = $_POST['empid'];
$hra_percentage = $_POST['hra'];
$da_percentage = $_POST['da'];
$professional_tax = $_POST['tax'];

// Fetch the basic pay of the selected employee
$sql = "SELECT BasicPay FROM salary WHERE empid = $empid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $basic_pay = $row['BasicPay'];
    
    $hra = ($hra_percentage / 100) * $basic_pay;
    $da = ($da_percentage / 100) * $basic_pay;
    $tax=($professional_tax/100)*$basic_pay;
    
    $insert_sql = "UPDATE Salary SET HRA = $hra, DA = $da, Professional_tax = $tax WHERE empid = $empid";
    if ($conn->query($insert_sql) === TRUE) {
        echo "Salary details updated successfully.";
        header("refresh: 3; url = http://localhost/assignment3_akc/dashboard.html");
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
} 

$conn->close();}
?>

