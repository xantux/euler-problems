<?php
/***********************************
 *
 * Problem 1 from Project Euler
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiplies is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000
 *
 * This file is made with VIM using PHP 5.6.0a3 on HHVM machine
 * 
 * PLEASE NOTE
 * In order to work you must have, at least, PHP 5.3.x or higher
 *
 * REGARDING THE PERFORMANCE
 * This is not the final version, as you can see I'll trace the version of every solution, so please don't think that
 * this is the best algorithm in terms of speed and code optimization, for any trouble open an issue.
 *
 * @author Claudio Ludovico Panetta (@Ludo237)
 * @version 1.0.0
 *************************************/

// Create two variables to store multiples of three and five
$multipleOfThree = []; // Array
$multipleOfFive = []; // Array
// First of all we need to iterate trough 1000 numbers
for($i = 0; $i < 1000; $i++){
    // Using strict comparison in PHP 
    // to compare numbers with ===
    // does not work
    if($i % 3 == 0) {
        $multipleOfThree[] = $i;
    }elseif($i % 5 == 0) {
        $multipleOfFive[] = $i;
    }else{
        continue; // We do not care of any other numbers
    }
}

// By using array_sum we sum the two arrays
// thanks to PHP for that function :)
$multipleOfThree = array_sum($multipleOfThree);
$multipleOfFive = array_sum($multipleOfFive);

// And now the final part
$total = $multipleOfThree + $multipleOfFive;
