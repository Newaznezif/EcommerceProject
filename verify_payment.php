<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have set a password for your database
$database = "estore"; // Change this to your database name

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if payment_id parameter is set in the URL
if (isset($_GET['payment_id'])) {
    // Get the payment ID from the URL
    $payment_id = $_GET['payment_id'];

    // Write SQL query to update payment verification status
    $update_query = "UPDATE paymentchapa SET verificationStatus = 'Verified' WHERE id = $payment_id";

    // Execute the update query
    if (mysqli_query($con, $update_query)) {
        // Redirect back to the page where payments are listed
        header("Location: index.php?view_paymentchapa");
        exit;
    } else {
        // Handle error if update query fails
        echo "Error updating payment verification status: " . mysqli_error($con);
    }
} else {
    // Redirect back to the page where payments are listed if payment_id parameter is not set
    header("Location: index.php?view_paymentchapa");
    exit;
}

// Close the database connection
mysqli_close($con);
?>
