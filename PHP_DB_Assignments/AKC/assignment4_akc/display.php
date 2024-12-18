<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Employee</title>
</head>
        <body>
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
        </body>
</html>

<?php
include 'connect.php';

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

    echo "
    <p><a href='http://localhost/assignment4_akc/dashboard.html'>Go back to dashboard</a></p>";
}

$conn->close();

?>