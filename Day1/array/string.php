<?php
// -----------------------------
// Day 1 - PHP DSA with Answers
// -----------------------------

// ✅ 1. Reverse an array manually

function reverseArray($arr)
{
    $start = 0;
    $end = count($arr) - 1;
    while ($start < $end) {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
    return $arr;
}

// ✅ 2. Reverse a string manually
function reverseString($str)
{
    $start = 0;
    $end = strlen($str) - 1;
    while ($start < $end) {
        $temp = $str[$start];
        $str[$start] = $str[$end];
        $str[$end] = $temp;
        $start++;
        $end--;
    }
    return $str;
}

// ✅ 3. Check if a string is a palindrome
function isPalindrome($str)
{
    $start = 0;
    $end = strlen($str) - 1;
    while ($start < $end) {
        if ($str[$start] !== $str[$end]) {
            return false;
        }
        $start++;
        $end--;
    }
    return true;
}

// ✅ 3. Count character frequency
function charFrequency($str)
{
    $freq = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!isset($freq[$char])) {
            $freq[$char] = 1;
        } else {
            $freq[$char]++;
        }
    }
    return $freq;
}

// ✅ 4. Remove duplicates from array
function removeDuplicates($arr) {
    return array_values(array_unique($arr));
}

function arrayFunctions() {
    // Reverse an array
    $array = [1, 2, 3, 4, 5];
    $reversedArray = reverseArray($array);
    print_r($reversedArray);
    echo PHP_EOL;

    // Remove duplicates from array
    print_r(removeDuplicates([1, 2, 2, 3, 4, 4, 5]));
}

function main() {
    // Reverse a string
    $string = "Hello, World!";
    $reversedString = reverseString($string);
    echo $reversedString . PHP_EOL;

    // Check if a string is a palindrome
    $string = "racecar";
    if (isPalindrome($string)) {
        echo "$string is a palindrome." . PHP_EOL;
    } else {
        echo "$string is not a palindrome." . PHP_EOL;
    }

    // Count character frequency
    print_r(charFrequency("hello world"));

    arrayFunctions();
}

// Call the main function
main();
?>