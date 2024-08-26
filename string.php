<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count the number of vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
