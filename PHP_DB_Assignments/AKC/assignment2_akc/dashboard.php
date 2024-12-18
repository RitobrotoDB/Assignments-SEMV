<?php
// File: dashboard.php

$conn = new mysqli("localhost", "root", "", "assignment2_akc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$food_query = "SELECT * FROM food_details";
$food_result = $conn->query($food_query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Food Dashboard</h1>
    <form method="POST" action="bill.php" target="_blank">
        <input type="hidden" name="customer_name" value="<?php echo htmlspecialchars($_GET['customer_name']); ?>" />
        <h2>Menu</h2>
        <?php while ($row = $food_result->fetch_assoc()): ?>
            <div>
                <input type="checkbox" name="food_items[]" value="<?php echo $row['food_item']; ?>">
                <?php echo $row['food_item']; ?> ($<?php echo $row['price_per_item']; ?>)
                <input type="number" name="quantities[]" placeholder="Quantity" min="1">
            </div>
        <?php endwhile; ?>
        <button type="submit">Generate Bill</button>
    </form>
</body>
</html>
