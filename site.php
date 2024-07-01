<?php
session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <!-- Add your CSS stylesheets and other meta tags here -->
    <style>
        /* Container styles */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Make container full height */
        }

        /* Button styles */
        .map-link {
            background-color: black;
            color: white;
            padding: 20px 40px;
            text-align: center;
            text-decoration: none;
            font-size: 36px;
            cursor: pointer;
            border-radius: 50px  50px 50px;
            transition: background-color 0.9s;
           
        }

        .map-link:hover {
            background-color: red;
        }

        /* Optional: Adjust styles for mobile responsiveness */
        @media screen and (max-width: 600px) {
            .map-link {
                padding: 8px 16px;
                font-size: 14px;
                font-style: oblique;
            }
        }
    </style>
</head>
<body>

<div class="center-container">
    <div class="map-link">
        <?php
        // Define the address of Wolkite
        $address = "Wolkite, Ethiopia";

        // Encode the address to make it suitable for a URL
        $encoded_address = urlencode($address);

        // Generate the Google Maps link with the encoded address
        $google_maps_link = "https://www.google.com/maps?q=" . $encoded_address;
        ?>
        <a href="<?php echo $google_maps_link; ?>" target="_blank">View on Google Maps</a>
    </div>
</div>

<!-- Your JavaScript code and other scripts go here -->

</body>
</html>
