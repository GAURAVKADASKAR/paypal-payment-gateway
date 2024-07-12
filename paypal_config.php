<?php 

  
// PayPal configuration 
define('PAYPAL_ID', 'sb-kqgj931609652@business.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'http://localhost/phpprojects/gaurav/paypal/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/phpprojects/gaurav/paypal/paypal_cancel.php'); 

define('PAYPAL_CURRENCY', 'USD'); 

// Database configuration 
define('DB_HOST', '192.168.1.3'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'welcome'); 
define('DB_NAME', 'paypal'); 

// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

// [ b_boy@gmail.com ]