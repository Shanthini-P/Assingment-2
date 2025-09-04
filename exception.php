<?php
function divide($a, $b) {
    if ($b == 0) {
        // Manually throw an exception if denominator is zero
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    $num1 = 10;
    $num2 = 0; // denominator

    $result = divide($num1, $num2);
    echo "Result: $result";
} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage();
}
?>
