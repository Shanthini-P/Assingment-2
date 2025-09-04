<?php
// Sample sentence
$sentence = "PHP is great, and PHP is powerful. PHP is easy to learn!";

// 1. Tokenize the sentence into words using regex
// \w+ matches sequences of word characters
preg_match_all('/\w+/', strtolower($sentence), $matches);

// $matches[0] contains all words in lowercase
$words = $matches[0];

// 2. Count occurrences of each word
$wordCount = array_count_values($words);

// 3. Display results
echo "Sentence: $sentence\n\n";
echo "Word Frequency:\n";
foreach ($wordCount as $word => $count) {
    echo "$word : $count\n";
}
?>
