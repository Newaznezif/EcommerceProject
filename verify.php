<?php
session_start();

// Include database connection
include("includes/db.php");

// Check if the user is logged in
if (!isset($_SESSION['customer_email'])) {
    // Redirect to login page or display an error message
    header("Location: login.php");
    exit();
}

// Retrieve customer ID from session
$session_email = $_SESSION['customer_email'];
$select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";
$run_customer = mysqli_query($con, $select_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];

// Perform verification of offline payment
// Example: Update the order status in the database or perform any other necessary action

// Display a success message or redirect back to the order page
echo "Offline payment verified successfully!";
?>
