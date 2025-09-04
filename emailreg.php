<?php
// Sample text with multiple emails
$text = "Please contact us at support@example.com, sales@myshop.org or info@test.co.in for details.";

// Regular expression pattern for emails
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/i";

// Extract all matches
preg_match_all($pattern, $text, $matches);

// Display results
if (!empty($matches[0])) {
    echo "Email addresses found:<br>";
    foreach ($matches[0] as $email) {
        echo "- $email <br>";
    }
} else {
    echo " No email addresses found.";
}
?>
