<?php
function searchValueInAssocArray($array, $searchValue) {
    foreach ($array as $key => $value) {
        if ($value === $searchValue) {  // Strict comparison
            return $key;  // Return the key where the value is found
        }
    }
    return false; // Return false if not found
}

// Example usage
$assocArray = [
    "name" => "Shanthini",
    "age" => 21,
    "city" => "Coimbatore",
    "degree" => "BSc Computer Science"
];

$search = "Coimbatore";
$result = searchValueInAssocArray($assocArray, $search);

if ($result !== false) {
    echo "Value '$search' found at key: $result";
} else {
    echo "Value '$search' not found in the array.";
}
?>
