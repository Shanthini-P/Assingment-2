<?php
 $fruits = ["Apple", "Banana"];
 echo "Original Array:\n";
 print_r($fruits);
 array_push($fruits, "Cherry", "Mango");
 echo "\nAfter Push (adding Cherry and Mango):\n";
 print_r($fruits);
 $removed = array_pop($fruits);
 echo "\nAfter Pop (removing last element):\n";
 print_r($fruits);
 echo "Removed Element: " . $removed . "\n";
?>
