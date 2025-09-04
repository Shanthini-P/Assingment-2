<?php
// Original string
$text = "Hello!! @World## 123 %$&*() PHP?";

// Step 1: Split string into array of characters
$chars = str_split($text);

// Step 2: Filter characters (keep only a-z, A-Z, 0-9, and space)
$filtered = array_filter($chars, function($ch) {
    return preg_match("/[a-zA-Z0-9 ]/", $ch);
});

// Step 3: Join array back into string
$result = implode("", $filtered);

// Display result
echo "Original: " . $text . "<br>";
echo "Cleaned: " . $result;
?>
