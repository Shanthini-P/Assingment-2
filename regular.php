<?php

$text = "I love PHP programming. Order ID: 12345, Amount: 6789. My email is user@example.com. I like cats and dogs. Fruits: apple,banana;orange grape";

if (preg_match("/php/i", $text)) {
    echo " Match found for 'PHP'<br>";
} else {
    echo "No match for 'PHP'<br>";
}

$email = "user@example.com";
if (preg_match("/^[\w.-]+@[\w.-]+\.[a-z]{2,6}$/i", $email)) {
    echo " '$email' is a valid email<br>";
} else {
    echo " '$email' is not a valid email<br>";
}

preg_match_all("/\d+/", $text, $matches);
echo " Numbers found in text: ";
print_r($matches[0]);
echo "<br>";

$pattern = "/cats|dogs/";
$replace = "pets";
$replacedText = preg_replace($pattern, $replace, $text);
echo "After replacement: $replacedText<br>";

$parts = preg_split("/[,\s;]+/", "apple,banana;orange grape");
echo " Fruits array after split: ";
print_r($parts);
echo "<br>";
?>
