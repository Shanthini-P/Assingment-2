<?php
$sentences = [
    "PHP is a powerful scripting language.",
    "I love coding in PHP.",
    "Web development is fun!",
];
$search = "PHP";

foreach ($sentences as $sentence) {
    if (strpos($sentence, $search) !== false) {
        echo "The string '<b>$search</b>' was found in: \"$sentence\" <br>";
    } else {
        echo "The string '<b>$search</b>' was NOT found in: \"$sentence\" <br>";
    }
}
?>