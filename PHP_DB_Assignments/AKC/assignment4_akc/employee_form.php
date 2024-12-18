<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee Management System</h1>

    <!-- Form to Insert/Update Employee Records -->
    <form action="" method="POST">
        <label for="ename">Name:</label>
        <input type="text" id="ename" name="ename" required><br><br>

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

        <button type="submit" name="action" value="insert">Add Employee</button>
        <button type="submit" name="action" value="update">Update Employee</button>
        <button type="submit" name="action" value="delete">Delete Employee</button>
    </form>

    <!-- Form to Sort and Display Employee Records -->
    <h2>View Employee Records</h2>
    <form action="" method="GET">
        <label for="sort">Sort By:</label>
        <select id="sort" name="sort">
            <option value="Ename">Name</option>
            <option value="Address">Address</option>
            <option value="Phno">Phone Number</option>
            <option value="Salary">Salary</option>
            <option value="Category">Category</option>
            <option value="Language">Language</option>
        </select>
        <button type="submit">Sort</button>
    </form>

    <?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "assignment3_akc");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'];
        $ename = $_POST['ename'];
        $address = $_POST['address'];
        $phno = $_POST['phno'];
        $salary = $_POST['salary'];
        $category = $_POST['category'];
        $language = isset($_POST['language']) ? implode(", ", $_POST['language']) : "";

        if ($action === 'insert') {
            $sql = "INSERT INTO Employee (Ename, Address, Phno, Salary, Category, Language) VALUES ('$ename', '$address', '$phno', '$salary', '$category', '$language')";
        } elseif ($action === 'update') {
            $sql = "UPDATE Employee SET Address='$address', Phno='$phno', Salary='$salary', Category='$category', Language='$language' WHERE Ename='$ename'";
        } elseif ($action === 'delete') {
            $sql = "DELETE FROM Employee WHERE Ename='$ename'";
        }

        if ($conn->query($sql) === TRUE) {
            echo "<p>Action '$action' completed successfully.</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Handle sorting and display
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $sql = "SELECT * FROM Employee ORDER BY $sort";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Salary</th>
                        <th>Category</th>
                        <th>Language</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Ename']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['Phno']}</td>
                        <td>{$row['Salary']}</td>
                        <td>{$row['Category']}</td>
                        <td>{$row['Language']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }
    }

    $conn->close();
    ?>
</body>
</html>
