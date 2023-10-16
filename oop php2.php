<?php
function is_anagram($str1, $str2) {
  // Check if the strings are the same length
  if (strlen($str1) != strlen($str2)) {
    return false;
  }
  // Create an array to store the counts of each character in the first string
  $char_counts = array();
  for ($i = 0; $i < strlen($str1); $i++) {
    $char = $str1[$i];
    if (!isset($char_counts[$char])) {
      $char_counts[$char] = 0;
    }
    $char_counts[$char]++;
  }
  // Iterate over the second string and check if each character is present in the first string
  for ($i = 0; $i < strlen($str2); $i++) {
    $char = $str2[$i];
    if (!isset($char_counts[$char]) || $char_counts[$char] == 0) {
      return false;
    }
    $char_counts[$char]--;
  }
  // If all characters in the second string are present in the first string, then the strings are anagrams
  return true;
}
// Test the function
$str1 = "abcd";
$str2 = "bcda";
if (is_anagram($str1, $str2)) {
  echo "The strings are anagrams.";
} else {
  echo "The strings are not anagrams.";
}
