<!DOCTYPE html>
<html>
<head>
    <title>Employee Salaries by Department</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
include 'connect.php';

$sql = "SELECT e.empname, d.dname, s.BasicPay, s.HRA, s.DA, s.Professional_tax
        FROM Employee e
        JOIN Salary s ON e.empid = s.empid
        JOIN Department d ON e.deptid = d.deptid
        ORDER BY d.dname, e.empname";

$result = $conn->query($sql);

echo "<table>
<tr>
<th>Department</th>
<th>Employee Name</th>
<th>Basic Pay</th>
<th>HRA</th>
<th>DA</th>
<th>Professional Tax</th>
<th>Total Salary</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $total_salary = $row['BasicPay'] + $row['HRA'] + $row['DA'] - $row['Professional_tax'];
        echo "<tr>";
        echo "<td>" . $row['dname'] . "</td>";
        echo "<td>" . $row['empname'] . "</td>";
        echo "<td>" . $row['BasicPay'] . "</td>";
        echo "<td>" . $row['HRA'] . "</td>";
        echo "<td>" . $row['DA'] . "</td>";
        echo "<td>" . $row['Professional_tax'] . "</td>";
        echo "<td>" . $total_salary . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No records found</td></tr>";
}

echo "</table>";

$conn->close();
?>

</body>
</html>
