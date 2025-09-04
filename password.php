<?php
// Test passwords
$passwords = [
    "Password1!",   // Valid
    "weakpass",     // Invalid
    "StrongPass9$", // Valid
    "12345678",     // Invalid
    "NoSpecialChar9"// Invalid
];

// Regex pattern
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

foreach ($passwords as $pwd) {
    if (preg_match($pattern, $pwd)) {
        echo "✅ '$pwd' is a valid password.<br>";
    } else {
        echo "❌ '$pwd' is NOT valid.<br>";
    }
}
?>
