<?php
// Define an array
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];

// Value to search
$search = "Cherry";

// Use array_search to find index
$index = array_search($search, $fruits);

if ($index !== false) {
    echo "The value '$search' is found at index: $index";
} else {
    echo "The value '$search' was not found in the array.";
}
?>
