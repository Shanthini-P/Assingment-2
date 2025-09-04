<?php

$text = "PHP is fun. I like PHP because PHP is powerful.";

$result = preg_replace("/PHP/", "Python", $text);

echo $result;
?>