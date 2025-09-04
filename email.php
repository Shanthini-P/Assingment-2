<?php
// Input string with emails
$text = "Contact us at support@example.com, sales@shop.org or admin@test.co.in for more info.";

// Step 1: Define regex pattern for email
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/";

// Step 2: Use preg_match_all to extract emails into an array
preg_match_all($pattern, $text, $matches);

// Step 3: $matches[0] will contain all emails
$emails = $matches[0];

// Display result
echo "Extracted Email Addresses:<br>";
print_r($emails);
?>
