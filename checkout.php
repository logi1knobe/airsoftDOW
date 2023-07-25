<?php
// Retrieve product details from the form submission
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

// You can add more validation and security checks here if needed

// Set up payment details for PayPal sandbox
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // Sandbox URL for testing
$paypal_email = 'your_sandbox_paypal_email@example.com'; // Your PayPal sandbox email

// Create a payment button with the necessary details
$paypal_button = "
<form action='$paypal_url' method='post'>
    <input type='hidden' name='business' value='$paypal_email'>
    <input type='hidden' name='cmd' value='_xclick'>
    <input type='hidden' name='item_name' value='$product_name'>
    <input type='hidden' name='amount' value='$product_price'>
    <input type='hidden' name='currency_code' value='USD'>
    <input type='hidden' name='return' value='http://yourwebsite.com/thank_you.php'> <!-- Replace with your 'thank you' page URL -->
    <input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay'>
</form>
";

// Display the PayPal button
echo $paypal_button;
?>
