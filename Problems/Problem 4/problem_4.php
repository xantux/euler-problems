<?php
/**
 *
 * Problem 4 from Project Euler
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 *
 * PLEASE NOTE
 * In order to test this script you must have PHP 5.3+ installed and php-cli, to test it with a terminal.
 *
 * REGARDING THE PERFORMANCE
 * This is not the final version, as you can see I'll trace the version of every solution, so please don't think that
 * this is the best algorithm in terms of speed and code optimization, for any trouble open an issue.
 *
 * @author Pietro Arturo PAnetta (@arturu)
 * @version 1.0
 */

// Starting the benchmark
$startTime = microtime();

function isPalindrome($number){

	$numberToArray = array_map('intval', str_split($number));

	$next = 0;
	$back = $cycle = count($numberToArray);

	--$back;

	for ( $next; $next<$cycle; $next++ ) {
		
		if ( $numberToArray[$next] != $numberToArray[$back] )
			return false;

		--$back;
	}

	return true;
}

function cycleManager($coppia,$command){

	if ( $command == 'break' ){
		--$coppia['a'];
		$coppia['b']=999;
	}
	else
		--$coppia['b'];

	if ( $coppia['a'] < 100 )
		$coppia['cycle']=false;

	return $coppia;
}


function maxPalindrome($coppia){

	$buffer = array();

	$coppia['cycle']=true;

	do {

		$number = $coppia['a'] * $coppia['b'];

		if ( isPalindrome( $number ) ) {
			$buffer[] = $number;
			$coppia = cycleManager($coppia,'break');
		}

		else 
			$coppia = cycleManager($coppia,'continue');

	} while ($coppia['cycle']);
	

	return max($buffer);
}


$result = maxPalindrome( array('a'=>999,'b'=>999) );

// Finish the benchmark 
$endTime = microtime();
echo "Algorithm time: ". ($endTime - $startTime);
