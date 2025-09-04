<?php
// Sample array
$words = ["Apple", "BaNaNa", "Cherry", "MANGO"];

// Convert all elements to lowercase
$lowercaseArray = array_map('strtolower', $words);

// Convert all elements to uppercase
$uppercaseArray = array_map('strtoupper', $words);

// Display results
echo "<h3>Original Array:</h3>";
print_r($words);

echo "<h3>Lowercase Array:</h3>";
print_r($lowercaseArray);

echo "<h3>Uppercase Array:</h3>";
print_r($uppercaseArray);
?>
