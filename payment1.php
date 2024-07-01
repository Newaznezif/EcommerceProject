<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/2484/9148/files/SDQSDSQ_32x32.png?v=1511436147" type="image/png">
  <title>Chapa Payment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 50px;
      width: 600px;
    }
  </style>

</head>
<body>

<!-- <div class="container">
  <h2 style="border: 5px solid #ddd; border-radius: 8px; padding: 20px; 
  box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.1); text-align: center  ;">Payment</h2> -->
 <!-- Include Font Awesome library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Container with money icon -->
<div class="container">
    <h2 style="border: 5px solid #ddd; border-radius: 8px; padding: 20px; 
    box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.1); text-align: center;">
        <i class="fas fa-money-bill"></i> Payment
    </h2>


  <!-- <table class="table table-striped" style="border: 5px 
  solid #ddd; border-radius: 8px; padding: 20px;
   box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.1);"> -->
    <!-- <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Payment Status</th>
      </tr>
    </thead> -->
    <!-- <tbody id="tableBody">
      <tr>
        <td>1</td>
        <td>Product Purchaser</td>
        <td>2</td>
        <td style="color: orange;">Pending</td>
        <td></td>
      </tr>
    </tbody> -->
  </table>
 <style>
    /* Define keyframes for blinking animation */
    @keyframes blink {
        50% { color: red; font-weight: bold; }
        50% { color: orange; font-weight: bold; }
        50% { color: yellow; font-weight: bold; }
        50% { color: green; font-weight: bold; }
        50% { color: blue; font-weight: bold; }
        50% { color: purple; font-weight: bold; }
    }

    /* Apply blinking animation to the paragraph element */
    p.blink {
        animation: blink 10s infinite; /* Change '5s' to adjust blink duration */
    }
</style>
<!-- HTML content with blinking text -->
<p class="blink">Hello, dear customer. Please remember to use the same email with your logged in email when filling out the payment form below.</p>

  <div >
    <form action="" method="POST" style="border: 5px solid #ddd; border-radius: 8px; padding: 20px; 
    box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.1);">
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required   placeholder="Write same email with your account">
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" id="amount" name="amount" required>
      </div>
      <input type="submit" class="btn btn-primary" value="Pay With Chapa">
      <a href="index.php" class="btn btn-secondary" style="background-color: #007bff; color: #fff;">Back</a>
    </form>
  
  </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount']; 
    $email = $_POST['email']; 
    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName']; 
    $phoneNumber = $_POST['phoneNumber']; 
    $txRef = "your-reference-" . time(); 
    $callbackUrl = "https://chapa.co";
    $returnUrl = "https://yourreturnurl.com";

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.chapa.co/v1/transaction/initialize',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            'amount' => $amount,
            "email" => $email,
            'first_name' => $firstName,
            'last_name' => $lastName,
            "phone_number" => $phoneNumber,
            'currency' => "ETB",
            "tx_ref" => $txRef,
            "callback_url" => $callbackUrl,
            // "return_url" => $returnUrl,
            "customization" => array(
                "title" => "Payment",
                "description" => "Payment "
            )
        )),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer CHASECK_TEST-8OvCdWo5ftb9wS9o1lzqAqEhFgaRVpxp',
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Curl error: ' . curl_error($curl);
    }

    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($httpCode != 200) {
        echo "Failed to initialize payment. HTTP status code: $httpCode";
    }

    curl_close($curl);

    if ($response === false) {
        echo "CURL Error: " . curl_error($curl);
    } else {
        $decodedResponse = json_decode($response, true);
        if (!$decodedResponse || isset($decodedResponse['status']) && $decodedResponse['status'] !== 'success') {
            echo "API Error: " . json_encode($decodedResponse);
        } else {
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "estore";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare SQL statement to insert data into paymentchapa table
            $sql = "INSERT INTO paymentchapa (firstName, lastName, email, phoneNumber, amount) 
                    VALUES (?, ?, ?, ?, ?)";
            // Prepare and bind parameters
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssd", $firstName, $lastName, $email, $phoneNumber, $amount);

            // Execute the prepared statement
            if ($stmt->execute()) {
                echo "Payment details submitted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
            
            header('Location: ' . $decodedResponse['data']['checkout_url']);
            exit();
        }
    }

}
?>
</body>
</html>




