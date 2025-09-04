<?php
// Main string
$text = "Welcome to PHP programming!";

// Substring to search
$search = "PHP";

// Method 1: Using strpos()
if (strpos($text, $search) !== false) {
    echo "The string '$search' was found in: '$text'";
} else {
    echo "The string '$search' was NOT found in: '$text'";
}

echo "\n";

// Method 2: (PHP 8+) Using str_contains()
if (function_exists("str_contains")) {
    if (str_contains($text, $search)) {
        echo "✅ Using str_contains(): '$search' exists in the text.";
    } else {
        echo "❌ Using str_contains(): '$search' does not exist in the text.";
    }
}
?>
