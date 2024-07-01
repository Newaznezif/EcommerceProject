<?php
session_start();
include("seller/includes/db.php");
include("seller/includes/header.php");
include("functions/functions.php");
include("seller/includes/mainseller.php");
// Handle seller registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a database connection
    $servername = "localhost";
    $username = "root"; // Change this if you have a different username
    $password = ""; // Change this if you have set a password for your database
    $database = "estore"; // Change this to your actual database name

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve seller registration data
    $name = $_POST['c_name'];
    $email = $_POST['c_email'];
    $password = $_POST['c_pass'];
    $country = $_POST['c_country'];
    $city = $_POST['c_city'];
    $contact = $_POST['c_contact'];
    $address = $_POST['c_address'];
    $image = $_FILES['c_image']['name'];
    $image_tmp = $_FILES['c_image']['tmp_name'];
    $business_license = $_FILES['c_id_document']['name'];
    $business_license_tmp = $_FILES['c_id_document']['tmp_name'];
    $ip = getRealUserIp();

    // Move uploaded image to directory
    move_uploaded_file($image_tmp, "seller/seller_images/$image");

    // Move uploaded business license file to directory
    move_uploaded_file($business_license_tmp, "seller/business_license/$business_license");

    // Check if email already exists
    $emailCheck = "SELECT * FROM sellers WHERE email = '$email'";
    $result = $conn->query($emailCheck);
    if ($result->num_rows > 0) {
        $errorMessage = "This email is already registered. Please use a different email.";
    } else {
        // Insert seller data into the database
        $sql = "INSERT INTO sellers (name, email, password, country, city, contact, address, image, business_license, ip) 
            VALUES ('$name', '$email', '$password', '$country', '$city', '$contact', '$address', '$image', '$business_license', '$ip')";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Registered successfully!";
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close database connection
    $conn->close();

}
?>


 <!-- MAIN -->
 <main>
      <div class="nero__heading">
        <span class="nero__bold">Register as a Seller</span>
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Sign Up</title>
    <script>
function validateInput(input) {
    // Remove any non-alphabetic characters, allowing alphabets and spaces
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

function checkPasswordStrength(password) {
    var uppercaseRegex = /[A-Z]+/;
    var lowercaseRegex = /[a-z]+/;
    var numberRegex = /[0-9]+/;
    var symbolRegex = /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]+/;

    var isUppercase = uppercaseRegex.test(password);
    var isLowercase = lowercaseRegex.test(password);
    var isNumber = numberRegex.test(password);
    var isSymbol = symbolRegex.test(password);
    var isLengthValid = password.length >= 8;

    var uppercaseMessage = document.getElementById("uppercase-message");
    var lowercaseMessage = document.getElementById("lowercase-message");
    var numberMessage = document.getElementById("number-message");
    var symbolMessage = document.getElementById("symbol-message");
    var lengthMessage = document.getElementById("length-message");
    var strengthMessage = document.getElementById("password-strength");

    if (isUppercase) {
        uppercaseMessage.style.color = "green";
    } else {
        uppercaseMessage.style.color = "red";
    }

    if (isLowercase) {
        lowercaseMessage.style.color = "green";
    } else {
        lowercaseMessage.style.color = "red";
    }

    if (isNumber) {
        numberMessage.style.color = "green";
    } else {
        numberMessage.style.color = "red";
    }

    if (isSymbol) {
        symbolMessage.style.color = "green";
    } else {
        symbolMessage.style.color = "red";
    }

    if (isLengthValid) {
        lengthMessage.style.color = "green";
    } else {
        lengthMessage.style.color = "red";
    }

    if (isUppercase && isLowercase && isNumber && isSymbol && isLengthValid) {
        strengthMessage.innerText = "Strong Password";
        strengthMessage.style.color = "green";
        // Hide individual requirement messages
        uppercaseMessage.style.display = "none";
        lowercaseMessage.style.display = "none";
        numberMessage.style.display = "none";
        symbolMessage.style.display = "none";
        lengthMessage.style.display = "none";
    } else {
        // Clear the strong password message if requirements are not met
        strengthMessage.innerText = "";
        strengthMessage.style.color = "red";
        // Show individual requirement messages
        uppercaseMessage.style.display = "block";
        lowercaseMessage.style.display = "block";
        numberMessage.style.display = "block";
        symbolMessage.style.display = "block";
        lengthMessage.style.display = "block";
    }
}

function validateNumericInput(input) {
    // Remove any non-numeric characters, allowing only digits and the plus sign
    input.value = input.value.replace(/[^\d+]/g, '');
}

function checkInputLength(input, minLength) {
    var messageElement = document.getElementById(input.name + "-message");
    if (input.value.length >= minLength) {
        messageElement.style.display = "none";
    } else {
        messageElement.style.display = "block";
    }
}

function updateCityField(city) {
    var cityInput = document.getElementById('cityInput');
    cityInput.value = city;
}
</script>

    <style>
        /* Style for the main section */
        main {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        /* Style for the form container */
        form {
            max-width: 500px;
            margin: 0 auto; /* Center the form horizontally */
            padding: 0 20px; /* Add space on the left and right */
        }

        /* Rest of the styles remain unchanged */
        .form-group {
            margin-bottom: 15px;
        }

        /* Style for labels */
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #password-strength {
            display: block;
            margin-top: 5px;
            font-size: 14px;
        }

        #c_contact-message,
        #c_address-message {
            display: none;
            margin-top: 5px;
            font-size: 14px;
            color: red;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>


</head>
<body>
    <!-- Seller registration form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>Full Name:</label>
           
            <input type="text" name="c_name" placeholder="Enter your name " oninput="validateInput(this)" required>

        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" placeholder=" Enter your Email Example: example@gmail.com" name="c_email" required>
        </div>

        <div class="form-group">
    <label>Password:</label>
    <input type="password" name="c_pass" required oninput="checkPasswordStrength(this.value)">
    <div id="uppercase-message" style="color: red;">At least one uppercase letter</div>
    <div id="lowercase-message" style="color: red;">At least one lowercase letter</div>
    <div id="number-message" style="color: red;">At least one number</div>
    <div id="symbol-message" style="color: red;">At least one symbol</div>
    <div id="length-message" style="color: red;">At least 8 characters</div>
    <span id="password-strength"></span>
</div>

        <div class="form-group">
            <label>Country:</label>
            <input type="text" name="c_country" value=" Ethiopia" required>
        </div>
        <div class="form-group">
        <div class="form-group">
    <label>City:</label>
    <div style="display: flex; align-items: center;">
    <input type="text" id="cityInput" required>
    <select name="c_city" id="citySelect" onchange="updateCityField(this.value)" required>
      <option value="">Select City</option>
      <option value="Abomsa">Abomsa</option>
<option value="Addis Ababa">Addis Ababa</option>
<option value="Adigrat">Adigrat</option>
<option value="Adwa">Adwa</option>
<option value="Agaro">Agaro</option>
<option value="Agena">Agena</option>
<option value="Aba Samuel">Aba Samuel</option>
<option value="Bahir Dar">Bahir Dar</option>
<option value="Bale">Bale</option>
<option value="Bale Robe">Bale Robe</option>
<option value="Bati">Bati</option>
<option value="Batu">Batu</option>
<option value="Bekoji">Bekoji</option>
<option value="Bichena">Bichena</option>
<option value="Bishoftu">Bishoftu</option>
<option value="Bonga">Bonga</option>
<option value="Borena Zone">Borena Zone</option>
<option value="Burayu">Burayu</option>
<option value="Butajira">Butajira</option>
<option value="Dangla">Dangla</option>
<option value="Debarq">Debarq</option>
<option value="Dembidollo">Dembidollo</option>
<option value="Debre Birhan">Debre Birhan</option>
<option value="Debre Markos">Debre Markos</option>
<option value="Dessie">Dessie</option>
<option value="Dilla">Dilla</option>
<option value="Dire Dawa">Dire Dawa</option>
<option value="Finote Selam">Finote Selam</option>
<option value="Fiche">Fiche</option>
<option value="Gambela">Gambela</option>
<option value="Gidole">Gidole</option>
<option value="Ginir">Ginir</option>
<option value="Gobba">Gobba</option>
<option value="Goba">Goba</option>
<option value="Gonder">Gonder</option>
<option value="Gorgora">Gorgora</option>
<option value="Guder">Guder</option>
<option value="Guraghe Zone">Guraghe Zone</option>
<option value="Ghimbie">Ghimbie</option>
<option value="Harar">Harar</option>
<option value="Hawassa">Hawassa</option>
<option value="Hirna">Hirna</option>
<option value="Hossana">Hossana</option>
<option value="Humera">Humera</option>
<option value="Jijiga">Jijiga</option>
<option value="Jimma">Jimma</option>
<option value="Jinka">Jinka</option>
<option value="Kembolcha">Kembolcha</option>
<option value="Kemise">Kemise</option>
<option value="Kibre Mengist">Kibre Mengist</option>
<option value="Konso">Konso</option>
<option value="Korem">Korem</option>
<option value="Kulubi">Kulubi</option>
<option value="Masha">Masha</option>
<option value="Mekelle">Mekelle</option>
<option value="Metemma">Metemma</option>
<option value="Metu">Metu</option>
<option value="Mieso">Mieso</option>
<option value="Nekemte">Nekemte</option>
<option value="Nefasit">Nefasit</option>
<option value="Nifas Silk-Lafto">Nifas Silk-Lafto</option>
<option value="Robe">Robe</option>
<option value="Sekota">Sekota</option>
<option value="Sebeta">Sebeta</option>
<option value="Shashamane">Shashamane</option>
<option value="Shakiso">Shakiso</option>
<option value="Shewa">Shewa</option>
<option value="Shewa Robit">Shewa Robit</option>
<option value="Sodo">Sodo</option>
<option value="Wenji">Wenji</option>
<option value="Woldia">Woldia</option>
<option value="Wolkite">Wolkite</option>
<option value="Yabelo">Yabelo</option>
<option value="Ziway">Ziway</option>


    <!-- Add more cities as needed -->
    </select>
  </div>
 
    <input type="hidden" name="selected_city" id="selectedCityField" value="">
</div>

    </div>

    <div class="form-group">
    <label>Contact:</label>
    <input type="text" value="251 " name="c_contact" required oninput="validateNumericInput(this); checkInputLength(this, 10)" pattern="[0-9]+" minlength="10">
    <span id="c_contact-message" style="display: none; color: red;">Please enter at least 10 characters.</span>
</div>

</div>

        <div class="form-group">
            <label>Address:</label>
            <input type="text" name="c_address" required oninput="checkInputLength(this, 3)">
            <span id="c_address-message"></span>
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input type="file" name="c_image" required>
        </div>
        <div class="form-group">
        <label>Upload Business ID or License:</label>
        <input type="file" name="c_id_document" required accept="image/*, application/pdf">
    </div>
        <button type="submit" name="register" style="display: block; margin: 0 auto;">Register</button>
        
  <!-- Display error message -->    
        <?php if(isset($errorMessage)) { ?>
            <div style="color: red;"><?php echo $errorMessage; ?></div>
        <?php } ?>


 <?php if(isset($successMessage)) { ?>
    <!-- Display the success message -->
    
    <!-- Include modal popup HTML code -->
    <?php include("message.html"); ?>
    
    <!-- Hide the form when the success message is displayed -->
    <script>
        document.querySelector('form').style.display = 'none';
    </script>
<?php } ?>

    </form> 
    <br>
    
    <br>
</body>
</html>

<?php

include("includes/footer.php");

?>









