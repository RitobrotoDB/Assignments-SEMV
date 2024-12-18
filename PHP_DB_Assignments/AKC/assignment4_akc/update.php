<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>Update Employee details</h1>
    
    <!-- Form to Insert/Update Employee Records -->
    <form action="" method="POST">
        <label for="ename">Enter the name of employee :</label>
        <input type="text" id="ename" name="ename" required><br><br><br>
        <h2>Update details : </h2>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="phno">Phone Number:</label>
        <input type="text" id="phno" name="phno" required><br><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" required><br><br>

        <label>Category:</label><br>
        <input type="radio" name="category" value="GEN" required> GEN<br>
        <input type="radio" name="category" value="SC"> SC<br>
        <input type="radio" name="category" value="ST"> ST<br>
        <input type="radio" name="category" value="OBC"> OBC<br><br>

        <label>Languages:</label><br>
        <input type="checkbox" name="language[]" value="Bengali"> Bengali<br>
        <input type="checkbox" name="language[]" value="English"> English<br>
        <input type="checkbox" name="language[]" value="Hindi"> Hindi<br>
        <input type="checkbox" name="language[]" value="Tamil"> Tamil<br><br>


        <button type="submit" name="action" value="update">Update Employee</button>
    </form>


    </form>
</body>


    <?php
    // Database connection
    include 'connect.php';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'];
        $ename = $_POST['ename'];
        $address = $_POST['address'];
        $phno = $_POST['phno'];
        $salary = $_POST['salary'];
        $category = $_POST['category'];
        $language = isset($_POST['language']) ? implode(", ", $_POST['language']) : "";

        if ($action === 'update') {
            $sql = "UPDATE Employee SET Address='$address', Phno='$phno', Salary='$salary', Category='$category', Language='$language' WHERE Ename='$ename'";
        } 

        if ($conn->query($sql) === TRUE) {
            echo "<p>Employee updated successfully.</p>";
        header("refresh: 3; url = http://localhost/assignment4_akc/dashboard.html");
        $conn->close();
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }