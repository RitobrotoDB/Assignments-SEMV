<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
</head>
<body>
    <h1>Delete Employee Record</h1>
    <form action="" method="POST">
        <label for="ename">Name:</label>
        <input type="text" id="ename" name="ename" required><br><br>
        <button type="submit">Delete</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conn = new mysqli("localhost", "root", "", "assignment3_akc");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $ename = $_POST['ename'];
        $sql = "DELETE FROM Employee WHERE Ename='$ename'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Record deleted successfully.</p>";
            header("refresh: 2; url = http://localhost/assignment4_akc/dashboard.html");
        $conn->close();
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
        $conn->close();
    }
    ?>
</body>
</html>
