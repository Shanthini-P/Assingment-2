<?php
// Sample values
$values = [1.65, 1.65, -1.54];

// Round each value to 1 decimal digit
foreach ($values as $val) {
    $rounded = round($val, 1);  // precision = 1 decimal place
    echo "Original: $val → Rounded: $rounded\n";
}
?>
