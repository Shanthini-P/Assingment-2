<?php
// Function to calculate average of numbers
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return 0; // avoid division by zero
    }
    $sum = array_sum($numbers);   // Sum of elements
    $count = count($numbers);     // Number of elements
    return $sum / $count;         // Average
}

// Example usage
$nums = [10, 20, 30, 40, 50];
$average = calculateAverage($nums);

echo "Numbers: " . implode(", ", $nums) . "<br>";
echo "Average Value: " . $average;
?>
