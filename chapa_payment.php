<?php
require_once 'vendor/autoload.php'; // This line includes the Composer autoloader

use Chapa\Chapa;
use Chapa\Model\PostData;
use Chapa\Util;

// Your Chapa configuration goes here

$secretKey = 'CHASECK_TEST-8OvCdWo5ftb9wS9o1lzqAqEhFgaRVpxp'; // Replace 'YOUR_CHAPA_SECRET_KEY' with your actual Chapa secret key

// Create a new Chapa instance with your secret key
$chapa = new Chapa($secretKey);
$transactionRef = Util::generateToken('acme'); // generated transaction reference will start with the prefix aceme
// Example of initializing a payment with Chapa
$postData = new PostData();
$postData->amount('100')
    ->currency('ETB')
    ->email('abebe@bikila.com')
    ->firstname('Abebe')
    ->lastname('Bikila')
    ->transactionRef($transactionRef)
    ->callbackUrl('https://chapa.co')
    ->customizations([
        'customization[title]' => 'I love e-commerce',
        'customization[description]' => 'It is time to pay'
    ]);

// Example of initializing a transaction
$response1 = $chapa->initialize($postData);

// Example of verifying a transaction
$transactionRef = Util::generateToken('acme');  // Replace 'YOUR_TRANSACTION_REFERENCE' with the actual transaction reference
$response2 = $chapa->verify($transactionRef);

// Output the results
echo "Initialize Response: ";
print_r($response1->getData());
echo "<br><br>";

echo "Verify Response: ";
print_r($response2->getData());
?>





