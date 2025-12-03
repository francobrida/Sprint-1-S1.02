<?php

function primeNumbers ($limit) {
    $isPrime = array_fill(0, $limit + 1, true); // Creates an array to track prime status, each number has a boolean value
        $isPrime[0] = false;
        $isPrime[1] = false;

        for ($i = 2; $i * $i <= $limit; $i++) { 
            if ($isPrime[$i]) {
                for ($multiple = $i * $i; $multiple <= $limit; $multiple += $i) {
                 $isPrime[$multiple] = false;
                }
            }
        }

        $primes = [];
        for ($j = 2; $j <= $limit; $j++) {
            if ($isPrime[$j]) {
                $primes[] = $j;
            }
        }
    return $primes; // Returns array with prime numbers up to the limit
}

?>