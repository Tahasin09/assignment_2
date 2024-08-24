<?php
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $vowelCount = 0;
    $originalString = $string;
    $reversedString = strrev($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"])) {
            $vowelCount++;
        }
    }

    echo "Original String: {$originalString}, Vowel Count: {$vowelCount},Reversed String: {$reversedString}";
    echo PHP_EOL;
}
