<?php
// Given arrays
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);

// Step 1: Merge arrays into one
$all_marks = array_merge($marks1, $marks2, $marks3);

// Step 2: Find maximum and minimum
$max_mark = max($all_marks);
$min_mark = min($all_marks);

// Step 3: Display results
echo "All Marks: " . implode(", ", $all_marks) . "<br>";
echo "Maximum Mark: " . $max_mark . "<br>";
echo "Minimum Mark: " . $min_mark;
?>
