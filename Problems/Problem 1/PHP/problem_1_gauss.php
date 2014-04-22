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
 * @version 1.5.0
 *************************************/
/**
 * Ringrazio Gauss per la soluzione
 */

// Start the benchmark
$startTest = microtime();

// We need a scalable algorithm so we cannot use a static zise for our test
$fine = 1000;
$inizio = 0;

// abbasso di uno la $fine perché nelle richieste i multipli di x
// devono essere inferiori a $fine;
--$fine;

/** --- Funzioni ---- **/
// NB alto() e basso() sono simili, ne ho scritte due, sono più leggibili

// trovo il multiplo più alto
// il numero di iterazioni del for al massimo è uguale alla ragione
function alto ($ragione,$fine) {
	// partendo dal numero più alto diminuisco di una unità
	// finché non trovo il multiplo più alto
	for ( $i = $fine; ; $i--){
		if ( $i % $ragione == 0 )
			return $i;
	}
}

// trovo il multiplo più basso
// (se si parte da 0 è uguale alla "ragione" della progressione)
// il numero di iterazioni del for al massimo è uguale alla ragione
function basso ($ragione,$inizio){
	// in caso inizio è zero
	$inizio = ($inizio==0) ? ++$inizio : $inizio;

	// partendo dall'inizio della serie
	// aumento di una unità finché non trovo il primo multiplo
	for ($i=$inizio; ; $i++){
		if ( $i % $ragione == 0 )
			return $i;
	}
}

/** --------- numero iterazioni -------- **/
// il numero di iterazioni è quante volte il multiplo si trova nella serie
// Es: count ( 3 + 3 + 3 + ... + (n-3) + (n-2) + (n-1) + (n-0) )
// per una data ragione trovo il numero di iterazioni
function iterazioni ($ragione,$alto,$basso){
	// restituisco il numero di iterazioni
	// quando $inizio==0 -> (n-1)
	return $alto/$ragione;
}


/** Trova l'area del trapezio **/
// grazie al "Principe dei matematici": Gauss
// la somma dei numeri di una progressione artimentica è uguale
// all'area del trapezio
function areaTrapezio($ragione,$inizio,$fine){
	$base_maggiore = alto($ragione,$fine);
	$base_minore = basso($ragione,$inizio);
	// 3*1 + 3*2 + 3*3 + ... 3(n-3) + 3(n-2) + 3(n-1) + 3(n-0)
	// uguare ad: altreza * (base_maggiore + base_minore) / 2
	return
		iterazioni($ragione,$base_maggiore,$base_minore) *
		($base_maggiore + $base_minore)
		/ 2;
}

/** ---- Calcolo le Aree delle diverse sequenze ----- **/
$tre_somma = areaTrapezio(3,$inizio,$fine);

$cinque_somma = areaTrapezio(5,$inizio,$fine);

$multipli_coincidenti = areaTrapezio(3*5,$inizio,$fine);


$total = $tre_somma + $cinque_somma - $multipli_coincidenti;

// End of benchmark
$endTest = microtime();
echo "Algorithm time: ". ($endTest - $startTest);
