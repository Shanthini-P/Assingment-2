<?php
// Numeric array
$numbers = [10, 20, 30, 40, 50];

echo "Original Array: ";
print_r($numbers);

// Using array_pop() - removes last element
$last = array_pop($numbers);
echo "\nElement removed using array_pop(): $last\n";
echo "Array after array_pop(): ";
print_r($numbers);

// Reset array
$numbers = [10, 20, 30, 40, 50];

// Using array_shift() - removes first element
$first = array_shift($numbers);
echo "\nElement removed using array_shift(): $first\n";
echo "Array after array_shift(): ";
print_r($numbers);
?>
