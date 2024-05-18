<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$imploded = implode(" ", $strings);
$exploded = explode(" ", $imploded);
$vowels = array('a', 'e', 'i', 'o', 'u');

foreach ($exploded as $word) {
    $vowel_count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $vowel_count++;
        }
    }
    echo "Original String: $word, Vowel Count: $vowel_count, Reversed String:" . strrev($word) . "<br />\n";
}
