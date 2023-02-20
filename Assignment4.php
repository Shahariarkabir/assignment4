<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sortByLength($array) {
    usort($array, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $array;
  }
  
  $myArray = array("apple", "banana", "kiwi", "orange", "pear");
  $sortedArray = sortByLength($myArray);
  print_r($sortedArray);
  
  

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function concatenate_strings($string1, $string2) {
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $result = '';
  
    // loop through each character in string 1, starting from the end
    for ($i = $len1 - 1; $i >= 0; $i--) {
      $result = $string1[$i] . $result;
    }
  
    // loop through each character in string 2, starting from the beginning
    for ($i = 0; $i < $len2; $i++) {
      $result .= $string2[$i];
    }
  
    return $result;
  }
  
  $string1 = 'hello';
  $string2 = 'world';
  
  $result = concatenate_strings($string1, $string2);
  
  echo $result; // output: ohelloworld
  

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($arr) {
    array_shift($arr); // remove first element
    array_pop($arr); // remove last element
    return $arr; // return the remaining elements
  }
  
  // Example usage
  $myArray = array(1, 2, 3, 4, 5);
  $myNewArray = removeFirstAndLast($myArray);
  print_r($myNewArray); // outputs: Array ( [0] => 2 [1] => 3 [2] => 4 )
  

// 4.Write a PHP function to check if a string contains only letters and whitespace.

function only_letters_and_whitespace($string) {
    return preg_match('/^[A-Za-z\s]+$/', $string);
}


// 5.Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargest($arr) {
    // Check if array has at least two elements
    if (count($arr) < 2) {
      return null;
    }
    
    // Initialize variables to hold largest and second largest
    $largest = $arr[0];
    $secondLargest = null;
    
    // Iterate through array, updating largest and second largest as needed
    foreach ($arr as $num) {
      if ($num > $largest) {
        $secondLargest = $largest;
        $largest = $num;
      } elseif ($num < $largest && ($secondLargest == null || $num > $secondLargest)) {
        $secondLargest = $num;
      }
    }
    
    return $secondLargest;
  }
  

?>