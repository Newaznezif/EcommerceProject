<!-- <?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have set a password for your database
$database = "estore"; // Change this to your database name

$connection = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the seller_id is received via POST
if (isset($_POST['seller_id'])) {
    $seller_id = $_POST['seller_id'];

    // Fetch the current verification status of the seller
    $fetch_query = "SELECT verified FROM sellers WHERE id = $seller_id";
    $fetch_result = mysqli_query($connection, $fetch_query);

    if ($fetch_result) {
        $seller = mysqli_fetch_assoc($fetch_result);
        $current_status = $seller['verified'];

        // Toggle the verification status
        $new_status = $current_status == 0 ? 1 : 0;

        // Update the verification status in the database
        $update_query = "UPDATE sellers SET verified = $new_status WHERE id = $seller_id";
        $update_result = mysqli_query($connection, $update_query);

        // Check if the update query was successful
        if ($update_result) {
            echo "success"; // Send a response back to the AJAX request
        } else {
            // Handle the error
            echo "Failed to update seller verification: " . mysqli_error($connection);
        }
    } else {
        // Handle the error
        echo "Failed to fetch seller details: " . mysqli_error($connection);
    }
} else {
    echo "Seller ID not provided";
}

// Close the database connection
mysqli_close($connection);
?>
;






<--<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Change this if you have a different username
$password = ""; // Change this if you have set a password for your database
$database = "estore"; // Change this to your database name

$connection = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the seller_id is received via POST
if (isset($_POST['seller_id'])) {
    $seller_id = $_POST['seller_id'];

    // Update the verification status in the database
    $update_query = "UPDATE sellers SET verified = 1 WHERE id = $seller_id";
    $update_result = mysqli_query($connection, $update_query);

    // Check if the update query was successful
    if ($update_result) {
        echo "success"; // Send a response back to the AJAX request
    } else {
        // Handle the error
        echo "Failed to verify seller: " . mysqli_error($connection);
    }
} else {
    echo "Seller ID not provided";
}

// Close the database connection
mysqli_close($connection);
?> -->