<?php
// Function to compare two multidimensional arrays
function array_diff_recursive($array1, $array2) {
    $difference = [];

    foreach ($array1 as $key => $value) {
        // If key not found in $array2
        if (!array_key_exists($key, $array2)) {
            $difference[$key] = $value;
        }
        // If value is an array, compare recursively
        elseif (is_array($value) && is_array($array2[$key])) {
            $new_diff = array_diff_recursive($value, $array2[$key]);
            if (!empty($new_diff)) {
                $difference[$key] = $new_diff;
            }
        }
        // If values are different
        elseif ($value !== $array2[$key]) {
            $difference[$key] = $value;
        }
    }

    return $difference;
}

// Example arrays
$array1 = [
    "name" => "Alice",
    "scores" => [90, 85, 88],
    "city" => "New York"
];

$array2 = [
    "name" => "Alice",
    "scores" => [90, 80, 88],
    "country" => "USA"
];

// Compare arrays
$result = array_diff_recursive($array1, $array2);

// Display result
echo "<pre>";
print_r($result);
echo "</pre>";
?>
