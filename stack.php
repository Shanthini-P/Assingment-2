<?php
// Initialize an empty stack
$stack = [];

// Push elements (insert at end)
array_push($stack, "A");
array_push($stack, "B");
array_push($stack, "C");

echo "Stack after pushes: ";
print_r($stack);

// Pop element (remove from end)
$removed = array_pop($stack);

echo "Element popped: $removed\n";
echo "Stack after pop: ";
print_r($stack);
?>
