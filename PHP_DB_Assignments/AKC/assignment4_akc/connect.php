<?php
    // Database connection
    $conn = new mysqli("localhost", "root", "", "assignment3_akc");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>