<?php


$strings = ["Hello", "World", "PHP", "Programming"];
foreach($strings as $str1) {
    $input = $str1;
    echo "Original String:  ".$input.", ";
    echo "Vowel Count: ".countVowels($input). ", ";
    echo "Reversed String: ".strrev($input). ", "."<br/>";

}

function countVowels ($str2) {
    $input = strtolower($str2) . '<br/>';
    $vowelCount = 0;
    for($i=0; $i<strlen($input); $i++) {
        if(in_array($input[$i], ['a', 'e', 'i', 'o', 'u','A', 'E', 'I', 'O', 'U'])) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}