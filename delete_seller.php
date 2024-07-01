<?php
// Start session and include necessary files
session_start();
include_once "includes/db.php";
include_once "includes/header.php";
include_once "functions/functions.php";
include_once "includes/main.php";

// Check if seller ID is set in POST request
if (isset($_POST['id'])) {
    // Get the seller ID
    $sellerId = $_POST['id'];

    // Perform the deletion operation
    $sql = "DELETE FROM sellers WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $sellerId);

    if (mysqli_stmt_execute($stmt)) {
        echo "Seller deleted successfully!";
    } else {
        echo "Error deleting seller: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
} else {
    // If seller ID is not set, return an error message
    echo "Seller ID is not set.";
}
?>;