<?php
// File: bill.php

// Database connection
$conn = new mysqli("localhost", "root", "", "assignment2_akc");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['customer_name'];
    $selected_items = $_POST['food_items'];
    $quantities = $_POST['quantities'];

    $total_amount = 0;
    $selected_food_details = [];

    // Calculate total amount
    foreach ($selected_items as $index => $food_item) {
        $quantity = (int) $quantities[$index];
        $price_query = "SELECT price_per_item FROM food_details WHERE food_item = '$food_item'";
        $price_result = $conn->query($price_query)->fetch_assoc();
        $price_per_item = $price_result['price_per_item'];

        $subtotal = $quantity * $price_per_item;
        $total_amount += $subtotal;

        $selected_food_details[] = [
            'food_item' => $food_item,
            'quantity' => $quantity,
            'subtotal' => $subtotal
        ];
    }

    // Get current date
    $date_of_payment = date("Y-m-d");

    // Update customer details
    $update_query = "
        UPDATE customer_details 
        SET total_amount_paid = $total_amount, date_of_payment = '$date_of_payment' 
        WHERE customer_name = '$customer_name'
    ";
    $conn->query($update_query);

    // Display the bill
    echo "<h1>Bill</h1>";
    echo "<p>Customer Name: $customer_name</p>";
    echo "<p>Date of Payment: $date_of_payment</p>";
    echo "<table border='1'>";
    echo "<tr><th>Food Item</th><th>Quantity</th><th>Subtotal</th></tr>";
    foreach ($selected_food_details as $detail) {
        echo "<tr><td>{$detail['food_item']}</td><td>{$detail['quantity']}</td><td>{$detail['subtotal']}</td></tr>";
    }
    echo "</table>";
    echo "<p><strong>Total Amount to Pay: $$total_amount</strong></p>";
}
?>
