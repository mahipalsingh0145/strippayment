<?php 
//https://www.codexworld.com/stripe-payment-gateway-integration-php/
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_51JdoIiSGZ6kvoFrkMllTf7WdBrNtMC3OixfhxBzDEYZHCJsFsxDCSpLHgyMAM7C0ZN49ZyiPJNdOgLRg68rRF4qZ00hRGbFS4I'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51JdoIiSGZ6kvoFrkklEltGfMtknaLxWfc9sKF72s6yEjqvYJ5XsuF13FYqKJE1Li2nyA8ybNK9LaLrmwksTqmyge00Z9J9d1Wf'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'stripe');