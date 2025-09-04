<?php
// 1. Delete using unset() on indexed array
$fruits1 = ["Apple", "Banana", "Mango", "Orange"];
unset($fruits1[1]); // deletes Banana
print_r($fruits1);

// 2. Delete using array_splice() on indexed array
$fruits2 = ["Apple", "Banana", "Mango", "Orange"];
array_splice($fruits2, 1, 1); // deletes Banana
print_r($fruits2);

// 3. Delete using array_diff() by value
$fruits3 = ["Apple", "Banana", "Mango", "Orange"];
$fruits3 = array_diff($fruits3, ["Banana"]); // deletes Banana
print_r($fruits3);

// 4. Delete using unset() on associative array
$student = [
    "name" => "Shanthini",
    "age"  => 21,
    "city" => "Coimbatore"
];
unset($student["age"]); // deletes key 'age'
print_r($student);
?>
