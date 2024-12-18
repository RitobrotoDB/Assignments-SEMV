<?php
// File: login.php

// Database connection
$conn = new mysqli("localhost", "root", "", "assignment2_akc");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error message
$error_message = "";

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $conn->real_escape_string(trim($_POST['customer_name']));

    // Check if customer exists
    $query = "SELECT * FROM customer_details WHERE customer_name = '$customer_name'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Redirect to dashboard with customer name
        header("Location: dashboard.php?customer_name=" . urlencode($customer_name));
        exit();
    } else {
        $error_message = "Customer not found. Please register or try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f9f9f9;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST">
            <div>
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" required>
            </div>
            <br>
            <button type="submit">Login</button>
        </form>
        <?php if (!empty($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
